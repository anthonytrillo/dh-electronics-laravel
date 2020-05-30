@extends('layouts.app')
@section("title", "Bienvenido a DH Electronics")

@section('content')

<!-- Carousel -->
<main role="main">
  @if(session('delete'))
    <p class ="alert alert-success text-center">El producto ha sido eliminado</p>
  @endif

  <div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/Boseagua.jpg" class="d-block w-100 h-80" alt="Bose">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Parlantes waterproof</h1>
            <p> Bose - UE - Apple</p>
            <p><a class="btn btn-lg btn-outline-info" href="{{ url('/categoria/3/audio') }}" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/foto.jpg" class="d-block w-100 h-80" alt="Bose">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Fotografia</h1>
            <p>Nikon - Sony - DJI</p>
            <p><a class="btn btn-lg btn-outline-info" href="{{ url('/categoria/1/fotografia') }}" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/smartphone.jpg" class="d-bloITEck w-100 h-80" alt="celulares">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Smartphones</h1>
            <p> Samsung - Apple - Google</p>
            <p><a class="btn btn-lg btn-outline-info" href="{{ url('/categoria/4/mobile') }}" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class=" carousel-control carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>


<!-- PRODUCTOS -->

<div id="centerRegionContainer" class="centerRegionContainer ">
    <div>
        <h2 class="text-center">Artículos destacados</h2>
    </div>
<div class="pro d-md-flex flex-md-equal my-md-3 pl-md-3">
    <div class="container">
    <div class="row justify-content-md-center">
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="/images/BoseSPeaker.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Parlantes</h5>
            <p class="card-text"></p>
            <a href="{{ url('/categoria/3/audio') }}" class="btn btn-primary">Ver mas...</a>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="/images/Fotografia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Cámaras fotográficas</h5>
            <p class="card-text"></p>
            <a href="{{ url('/categoria/1/fotografia') }}" class="btn btn-primary">Ver mas...</a>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="/images/dron.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Drones y Videocamaras</h5>
            <p class="card-text"></p>
            <a href="{{ url('/categoria/1/fotografia') }}" class="btn btn-primary">Ver mas...</a>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="/images/iphone.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Celulares</h5>
            <p class="card-text"></p>
            <a href="{{ url('/categoria/4/mobile') }}" class="btn btn-primary">Ver mas...</a>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>

<div class="pro d-md-flex flex-md-equal my-md-3 pl-md-3">
  <div class="pro bg-inherit mr-md-3 pt-4 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/images/nintendo.jpg" class="img-fluid w-50 h-50" alt="tv">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/5/tv') }}">Gaming</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-white text-center overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/images/Accesorios.jpeg" class="img-fluid w-50 h-50" alt="accesorios">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/6/accesorios') }}">Accesorios</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/storage/images/fotosDH/lenovo.jpg" class="img-fluid w-50 h-50" alt="compu">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/2/computadoras') }}">Computadoras</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/storage/images/fotosDH/samsung_.jpg" class="img-fluid w-50 h-50" alt="TV">
      <br><br>
        <a class="btn btn-outline-secondary" href="{{ url('/categoria/5/tv') }}">Televisores</a>
    </div>
  </div>
</div>

</div>
</main>




@endsection
<!-- INCLUYO EL FOOTER -->
