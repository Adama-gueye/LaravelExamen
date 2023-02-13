@include('navbar.app')
@include('layouts.app')
<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE AJOUT D'UNE FORMATION</h3>
    </div>
<div class="card" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ;">
     <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Ajout Formation</div>
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
        <form action="{{ route('types.store') }}"  method="POST">
                @csrf
                <label for="">Libellé</label>
                <input type="text" class="form-control" name="libelle">
                <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="{{route('types.index')}}">Retour</a>
                    <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
