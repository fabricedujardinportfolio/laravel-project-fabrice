@extends('parts/header')
@section('form')
<div class="container d-flex">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-12">
        <h2>Le site de prise
            de rendez-vous avec un professionnels de santé
        </h2>
        <h3>Salut : {{ $name }} </h3>
    <div class="col-md-3"></div>
</div>
</div>
<form action="" method="post" class="d-inline">
    <div class="container d-flex">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-12">
            <div class=" form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="Médecine Générale, Gynécologie, Dr Michel DUPONT...">
                <label for="floatingInput">Rechercher un praticien :</label>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container d-flex">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-12">
            <div class=" form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="Médecine Générale, Gynécologie, Dr Michel DUPONT...">
                <label for="floatingInput">Localisation du praticien :</label>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="container d-flex">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-12">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" name="rechercher">Rechercher</button>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
</form>
@endsection
