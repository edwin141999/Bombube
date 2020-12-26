<link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="images/adidas.png" alt="Logo arlet" class="img img-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}} nav-link">Home</a>
        </li>
        <li class="nav-item"><a href="{{route('nails.index')}}" class="{{request()->routeIs('nails.*') ? 'active' : ''}} nav-link">Nails</a>
        </li>
        <li class="nav-item"><a href="{{route('contacto.index')}}" class="{{request()->routeIs('contacto.*') ? 'active' : ''}} nav-link">Contact me</a>
        </li>
      </ul>
    </div>
  </nav>