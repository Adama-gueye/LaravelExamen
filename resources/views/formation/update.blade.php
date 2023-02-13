@include('layouts.app')
<div class="container mt-2">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">BIENVENUE DANS LA PAGE DE MODIFICATION D'UNE FORMATION</h3>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            return {{session('success')}}
        </div>
    @endif
<div class="col-md-6 offset-3">
            <div class="card" style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ;">
            <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Modifier Formation</div>
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
            <form action="{{ route('formations.update',$formation->id) }}" method="POST">
                @csrf
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{$formation->nom}}">
                <label for="">Durée</label>
                <input type="number" class="form-control" name="duree" value="{{$formation->duree}}">
                <label for="">Description</label>
                <input type="text" class="form-control" name="descrition" value="{{$formation->descrition}}">
                <label for="">A t-il Démarer</label>
                <select name="isStarted" id="" class="form-control">
                    <option value="Oui" {{ $formation->isStarted == 'Oui' ? 'selected' : '' }}>Oui</option>
                    <option value="Non" {{ $formation->isStarted == 'Non' ? 'selected' : '' }}>Non</option>
                </select>
                <label for="">Date de Début</label>
                <input type="date" class="form-control" name="dateD" value="{{$formation->date_debut}}">
                <label for="">Veuillez Choisir Le Référentiel</label>
                <select name="referentiel" id="" class="form-control">
                    @foreach($referentiels as $referentiel)
                        <option value="{{ $referentiel->id }}" {{ $referentiel->id == $formation->referentiel_id ? 'selected' : '' }}>{{ $referentiel->libelle }}</option>
                    @endforeach
                </select>
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
            <button type="submit" class="btn btn-primary mt-3 offset-4"><i class="fa fa-btn fa-sign-in"></i>Sauvegarder</button>
            </form>
        </div>
    </div>
</div>
