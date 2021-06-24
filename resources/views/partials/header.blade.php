<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}">CaseEstive</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="{{ (request()->is('/')) ? 'active' : '' }}
            nav-link" aria-current="page" href="{{ route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{ (request()->is('house')) ? 'active' : '' }} nav-link" href="{{ route('house') }}">Case</a>
        </li>
        <li class="nav-item">
          <a class="{{ (request()->is('contacts')) ? 'active' : '' }} nav-link" href="{{ route('contacts')}}">Contatti</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
