@extends("layout.header")
@include('layout/parts/head')
@section("contenue")
<form action="{{ route('accueilPlusPost')}}" method="post" class="d-inline">
    @csrf
    <div class="container d-flex pt-4 pb-4">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-12">
            <label for="floatingInput"><strong>Selectionner votre praticien :</strong></label>
            <select class="form-select" id="floatingInput" aria-label="Default select example" name="doctorSelect">
                <option value=""></option>
            </select>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container d-flex pb-3">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-12">
            <label for="floatingInput"><strong>Selectionner votre tranche horraire :</strong></label>
            <div class="form-group row">
                <label for="example-datetime-local-input" class="col-4 col-form-label">Date et heure</label>
                <div class="col-8">
                    <input class="form-control" type="datetime-local" value="" name="dateTime"
                        id="example-datetime-local-input">
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container d-flex">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-12">
            <div class=" form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" value=""
                    placeholder="Médecine Générale, Gynécologie, Dr Michel DUPONT..." name="info">
                <label for="floatingInput">Info suplémentaire pour le medecin:</label>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="container d-flex pb-2">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-12">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-primary" name="rechercher" value="ok">PENDRE UN
                    RDV</button>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
</form>
@endsection
@include('layout/footer')
