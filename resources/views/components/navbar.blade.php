<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Forum</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Lavora con noi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          @else
          {{-- @auth --}}
          <li class="nav-item">
            <p class="nav-link">Benvenuto {{Auth::user()->name}}</p>
          </li>
          {{-- @endauth --}}
          {{-- @endguest --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Altro
            </a> --}}
            <ul class="dropdown nav-item" >
              {{-- <li><a class="dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li> --}}
              {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit()";>Logout</a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
              @csrf
              </form>
              </li>
            </ul>
          </li>
          @endguest
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>