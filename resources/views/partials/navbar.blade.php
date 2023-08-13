<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KodingQ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <div class="btn btn-secondary active"><i class="bi bi-house-door-fill"></i></div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <div class="btn btn-secondary"><i class="bi bi-calendar2-event-fill"></i></div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <div class="btn btn-secondary"><i class="bi bi-house-door"></i></div>
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- terdapat method auth() pada laravel, untuk mengambil semua data milik user yang sudah login --}}
              {{-- Welcome back,  {{ auth()->user()->name }} --}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                {{-- dijadikan form karena ingin mengirim csrf juga --}}
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
            <li class="nav-item">
              <a href="/login" class="btn btn-secondary"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        @endauth
      </ul>
      
    </div>
  </div>
</nav>