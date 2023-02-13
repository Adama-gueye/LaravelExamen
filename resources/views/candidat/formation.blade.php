@include('navbar.app')
@include('layouts.app')
<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;"> NOMBRES DE CANDIDATS PAR FORMATION</h3>
    </div>

        @foreach ($candidats_par_formation as $formation)
            <h3>Le nombre de Candidats pour la Formation {{$formation->nom}} est de {{$formation->candidats_count}} Candidats.</h3>
        @endforeach

</div>