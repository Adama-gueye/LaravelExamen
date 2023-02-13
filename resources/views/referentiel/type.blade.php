@include('navbar.app')
@include('layouts.app')
<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;"> NOMBRES DE REFERENTIEL PAR TYPE</h3>
    </div>
    @foreach ($types as $type) 
        <h3>Le nombre de référentiel pour le type  {{$type->libelle}}  est de {{$type->referentiels_count}}</h3><br>
    @endforeach
</div>