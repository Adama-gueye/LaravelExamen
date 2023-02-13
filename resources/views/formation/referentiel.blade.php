@include('navbar.app')
@include('layouts.app')
<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;"> NOMBRES DE FORMATIONS PAR TYPE</h3>
    </div>
<?php foreach ($types as $type) : ?>
    <?php $nbFormations = 0; ?>
    <?php foreach ($type->referentiels as $referentiel) : ?>
        <?php $nbFormations += $referentiel->formations()->count(); ?>
    <?php endforeach; ?>
    <h3>Le type <?= $type->libelle ?> a <?= $nbFormations ?> formations</h3><br>
    <?php endforeach; ?>
</div>
