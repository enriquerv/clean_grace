<section>
  <div class="row">
    <div class="col-12">
      <img src="https://via.placeholder.com/1639x187?text=1639x187_navbar" width="100%">
    </div>
  </div>
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-fill w-100">
      <a class="nav-item nav-link text-center {{ $active == 'index' ? 'bolder' : '' }}" href="{{ URL::route('home') }}">
        Inicio
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'aboutus' ? 'bolder' : '' }}" href="{{ URL::route('aboutus') }}">
        Nosotros
      </a>
        
      <div class="btn-group nav-item nav-link text-center pointer">
        <span>Servicios</span>
        <span class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </span>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Productos #1</a>
          <a class="dropdown-item" href="#">Productos #2</a>
          <a class="dropdown-item" href="#">Productos #3</a>
        </div>
      </div>



      <a class="nav-item nav-link text-center {{ $active == 'galery' ? 'bolder' : '' }}" href="{{ URL::route('galery') }}">
        Galería
      </a>
      <a class="nav-item nav-link text-center {{ $active == 'contact' ? 'bolder' : '' }}" href="{{ URL::route('contact') }}">
        Contacto
      </a>
    </div>
  </div>
</nav>

<section class="row">
  <div class="col-12">
    <img src="https://via.placeholder.com/1622x15?text=1622x15_banner" width="100%">
  </div>
</section>

<style>
  .nav-link{
    padding: 0 !important;
  }
  .nav-item{
    color: #24437a !important;
    font-size: 25px;
  }
  .no-padding{
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
</style>