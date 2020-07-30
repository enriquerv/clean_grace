<section>
  <div class="row">
    <div class="col-12">
      <img src="{{ env('APP_URL') }}/assets/images/navbar_bg.png" width="100%">
      <a href="https://www.facebook.com/Clean-Grace-101961094934416/" target="_blank">
        <img class="img_social social_1" src="{{ env('APP_URL') }}/assets/images/icon_face.png">
      </a>
      <a href="https://www.instagram.com/cleangrace.mx/" target="_blank">
        <img class="img_social social_2" src="{{ env('APP_URL') }}/assets/images/icon_insta.png">
      </a>
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
        <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="{{ $active == 'protocols' || $active == 'services' ? 'bolder' : '' }}">Servicios</span>
          <span class="sr-only">Toggle Dropdown</span>
        </span>
        <div class="dropdown-menu">
          <a class="dropdown-item item_service" href="{{ URL::route('services') }}">Servicio de sanitización</a>
          <a class="dropdown-item item_service" href="{{ URL::route('protocols') }}">Protocolos sanitarios</a>
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
  .item_service{
    color: #24437a !important;
    font-size: 20px;
  }
  .img_social{
    width: 60px;
    position: absolute;
    z-index: 999999999;
    bottom: 10px;
    right: 0;
  }
  .social_1{ margin-right: 120px; }
  .social_2{ margin-right: 30px; }
</style>