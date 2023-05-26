<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="{{Route('home')}}">BLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <div class="d-flex align-items-center">
        <div class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="button">Cari</button>
        </div>
        <div class="ms-3 d-flex align-items-center border-start ps-3">
          @guest
          <a href="{{Route('login')}}" class="btn btn-primary" type="button">Login</a>
          <a href="{{Route('register')}}" class="btn btn-outline-primary ms-2" type="button">Daftar</a>
          @endguest
          @auth
          <div class="dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{Route('post')}}">Buat Blog</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{Route('profile', Auth::user()->username)}}">Profil</a></li>
              <li><a class="dropdown-item" href="{{Route('setting')}}">Pengaturan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{Route('logout')}}">Logout</a></li>
            </ul>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </div>
</nav>