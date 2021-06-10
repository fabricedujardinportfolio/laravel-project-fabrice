
<div class="container ">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="{{ route('accueil')}}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="{{ asset('images/logo.png') }}" width="100px" alt="" srcset="">
      <div>NC-DOC</div>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('search')}}" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tous les docteur</font></font></a></li>
        <li><a href="{{ route('professional-workplace')}}" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Espace professionnel</font></font></a></li>
        <li><a href="{{ route('faq')}}" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FAQ</font></font></a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connexion</font></font></button>
        <button type="button" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrivez-vous</font></font></button>
      </div>
    </header>
  </div>