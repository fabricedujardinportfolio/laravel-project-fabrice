<div class="container-fluid bckground-doctor pb-4 d-md-flex">
    <div class="bg-light col-md-8 col-12">
        <div class="container d-flex pt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12">
                <h2 class="text-uppercase fs-4">Le site de prise
                    de rendez-vous avec un professionnels de santé
                </h2>
                <h3 class="pt-2">Salut  </h3>
                <div class="col-md-3"></div>
            </div>
        </div>
        <form action="/" method="post" class="d-inline">
        @csrf
            <div class="container d-flex pt-4 pb-4">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-12">
                    <select class="form-select" id="floatingInput" aria-label="Default select example"
                        name="doctorSelect">
                        <option selected>Selectionner votre praticien :</option>
                        <option value="1">fabrice</option>
                        <option value="2">paul</option>
                        <option value="3">greg</option>
                        <option value="4">ben</option>
                        <option value="5">male</option>
                        <option value="6">mel</option>
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
                        <button type="submit" class="btn btn-primary" name="rechercher">Rechercher</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
    </div>
    <div class="col-1"></div>
    <div class="col-3 mx-auto text-center d-md-block d-none">
        <div class="col-12 " style="height:25%"></div>
        <div class="col-12 d-flex texte-center" style="background-color:#99BEC7 ; max-width:190px;">
            <div class="col">
                <div class="col">
                    <img src="{{ asset('images/logo.png') }}" class="center-block" height="150px" width="100%"></div>
                <div class="bg-light"><q
                        cite="http://www.ideeslogan.com/liste-categorie-slogans/items/sante.html">Adopter le bon
                        traitement</q></div>
            </div>
        </div>
    </div>
</div>
</form>
<?php dd($_POST);?>
</div>
</div>
