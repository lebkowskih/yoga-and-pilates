<nav class="navbar navbar-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand ms-2" href="{{ route('dashboard') }}">
        <img src="{{ asset('images/logo.png') }}" width="160" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>