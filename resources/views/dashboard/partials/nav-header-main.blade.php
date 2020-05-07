<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Larablog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Módulos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('post.index')}}">Posts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('category.index')}}">Categorías</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item mr-sm-2">
          <a class="nav-link" href="{{route('bienvenida')}}">Home<span class="sr-only"></span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Perfil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('post.index')}}">Datos</a>
                <a class="dropdown-item" href="{{route('post.index')}}">Configuración</a>
            </div>
        </li>

        <li class="nav-item mr-sm-2">
          <a class="nav-link" href="#">Iniciar sesión<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  