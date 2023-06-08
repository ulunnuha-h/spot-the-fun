<nav class="navbar navbar-expand-lg container">
    <div class="container-fluid">
      <a class="navbar-brand position-relative" href="/">
        <img src="/images/logo.svg" alt="logo" style="height: 50px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="w-100 mb-4 mb-lg-0" role="search" action="/event">
          <input class="form-control rounded-pill" type="search" placeholder="Cari konser favoritmu" aria-label="Search" name="key">
        </form>
        @if ($logged)
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4 d-flex align-items-center gap-4 gap-lg-0">
            <li class="nav-item mx-3">
              <a
                class="btn-secondary px-4 py-2 d-flex text-center align-items-center gap-2"
                href="/history"
                style="width: 150px">
                <span class="iconify" data-icon="ph:ticket-fill"></span>
                Tiket Saya</a>
            </li>
            <li class="nav-item nav-logout">
              <span href="#">
                <img src="/images/{{$photo}}" alt="foto profil" style="width: 40px; height: 40px; object-fit: cover" class="rounded-circle">
              </span>
              <form method="POST" action="{{route('logout')}}">
                @csrf
                <button
                    class="position-absolute bg-primary text-white px-3 py-1 rounded-pill align-items-center gap-1 border-0"
                    style="margin-left: -30px;"
                    id="btn-logout">
                  <span class="iconify" data-icon="mdi:logout"></span>
                  <span>Logout</span>
                </button>
              </form>
            </li>
          </ul>  
        @else
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4 d-flex align-items-center gap-4 gap-lg-0">
            <li class="nav-item mx-2">
              <a class="btn-secondary px-4 py-2" href="/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="btn-primary px-4 py-2" href="/login">Login</a>
            </li>
          </ul>
        @endif
      </div>
    </div>
  </nav>