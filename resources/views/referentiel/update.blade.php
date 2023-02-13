@include('layouts.app')
<div class="container mt-2">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE DE MODIFICATION D'UN REFERENTIEL</h3>
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
            <form action="{{ route('referentiels.update',$referentiel->id) }}" method="POST">
                @csrf
                <label for="">Libellé</label>
                <input type="text" class="form-control" name="libelle" value="{{$referentiel->libelle}}">
                <label for="">Validait</label>
                <select name="validated" id="" class="form-control">
                    <option value="Oui" {{ $referentiel->validated == 'Oui' ? 'selected' : '' }}>Oui</option>
                    <option value="Non" {{ $referentiel->validated == 'Non' ? 'selected' : '' }}>Non</option>
                </select>
                <label for="">Horaire</label>
                <input type="text" class="form-control" name="horaire" value="{{$referentiel->horaire}}">
                <label for="">Veuillez Choisir Le Type</label>
                <select name="type" id="" class="form-control">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $referentiel->type_id ? 'selected' : '' }}>{{ $type->libelle }}</option>
                    @endforeach
                </select>
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
            <button type="submit" class="btn btn-primary mt-3 offset-4"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
            </form>
        </div>
    </div>
</div>
