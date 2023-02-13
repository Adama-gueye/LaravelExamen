@include('navbar.app')
@include('layouts.app')

<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE AJOUT CANDIDAT</h3>
    </div>
<div class="card" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ;">
     <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Ajout Candidat</div>
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
            <form action="{{ route('candidats.store') }}" id="form" method="POST">
                @csrf
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenom">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
                <label for="">Age</label>
                <input type="number" max="35" min="15" class="form-control" name="age">
                <label for="">Niveau d'Etude</label>
                <input type="text" class="form-control" name="niveauEtude">
                <label for="">Sexe</label>
                <select name="sexe" id="" class="form-control">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                <label for="">Veuillez Choisir la Formation</label>
                <select name="formation" id="" class="form-control">
                    @foreach($formations as $formation)
                        <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
                    @endforeach
                </select>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" href="{{route('candidats.index')}}">Retour</a>
                    <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
