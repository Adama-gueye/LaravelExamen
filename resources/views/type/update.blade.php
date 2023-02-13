@include('layouts.app')
<div class="container mt-2">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE DE MODIFICATION D'UN CANDIDAT</h3>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            return {{session('success')}}
        </div>
    @endif
<div class="col-md-6 offset-3">
            <div class="card" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ;">
            <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Modifier Candidant</div>
            <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('types.update',$type->id) }}" method="POST">
                @csrf
                <label for="">Libellé</label>
                <input type="text" class="form-control" name="libelle" value="{{$type->libelle}}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary mt-3 offset-4"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
            </form>
        </div>
    </div>
</div>
