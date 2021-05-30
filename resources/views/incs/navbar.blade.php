<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" style="color:#66EB9A" href="{{route('articles')}}">WE Fashion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('hommes')}}">Hommes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'femmes'}}">Femmes</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          @if(Auth::user())
          @if(Auth::user()->role=="admin")
          <li class="nav-item active">
            <a class="nav-link" href="{{route('product.index')}}">Mon espace admin
            </a>
          </li>
          @endif
          <li class="nav-item">
            <form action="{{ route('logout')}}" method="POST">
              @csrf
              <button type="submit" class='btn'>Déconnexion</button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Connexion
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>