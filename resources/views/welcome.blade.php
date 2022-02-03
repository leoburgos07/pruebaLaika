<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/f8d6d2f563.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <nav id="nav-black" class="navbar navbar-expand-lg navbar-light bg-dark  text-l" style="padding:0px 30px 0px">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active list text-l">
          <i class="fas fa-shield-alt"></i> Compras seguras online | <i class="fas fa-hand-holding-usd"></i> Pago contra entrega | <i class="fas fa-truck"></i> Entregas el mismo dia
        </li>
      </ul>

      Llamanos <i class="fas fa-phone"></i> | 3009108496 <span style="padding: 10px 40px 10px 40px"> Escribenos <i class="fab fa-youtube"></i> <i class="fab fa-instagram"></i> <i class="fab fa-facebook-f"></i></span>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light nav-search p-0">
    <a class="navbar-brand" href="#"><img src="{{asset('img/Logo.PNG')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  text-l" id="navbarSupportedContent">
      <div class="col-md-6">
        <form class="form-inline my-2 my-lg-0">

          <input class="form-control col-lg-12" type="search" placeholder="Encuentra lo mejor para tu mascota" aria-label="Search">
        </form>
      </div>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('img/col.PNG')}}" alt="Colombia"> BOG
          </a>
          <div class="dropdown-menu nav-search" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-l" href="#"><img src="{{asset('img/col.PNG')}}" alt="Colombia"> <span class="text-s">BAQ</span> </a>
            <a class="dropdown-item text-l" href="#"><img src="{{asset('img/col.PNG')}}" alt="Colombia"> <span class="text-s">MED</span></a>
            <a class="dropdown-item text-l" href="#"><img src="{{asset('img/col.PNG')}}" alt="Colombia"> <span class="text-s">SM</span></a>
          </div>
        </li>

      </ul>
      <a class="nav-link text-light" href="#"> <i class="fas fa-user"></i> Mi cuenta</a>
      <a class="nav-link disabled text-light" href="#"><i class="fas fa-shopping-cart"></i></a>

    </div>
  </nav>
  <div class="container p-2">
    <div class="dropdown show d-inline col-md-3">
      <a class="btn  dropdown-toggle color-text" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{asset('img/perro.PNG')}}" alt=""> Compra para perro
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconAlimento.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt=""> Alimento</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconSnack.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Snacks</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconFarmapet.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Farmapet</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconCuidado.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Cuidado e Higiene</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconJuguete.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Juguetes</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconCategoria.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Accesorios</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconPetLovers.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Para PetLovers</a>

      </ul>
    </div>
    <div class="dropdown show d-inline col-md-3">
      <a class="btn  dropdown-toggle  color-text" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{asset('img/gato.PNG')}}" alt=""> Compra para gato
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconAlimento.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt=""> Alimento</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconSnack.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Snacks</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconFarmapet.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Farmapet</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconCuidado.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Cuidado e Higiene</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconJuguete.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Juguetes</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconCategoria.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Accesorios</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle font-weight-bold" href="#"><img src="{{asset('img/iconPetLovers.png')}}" style="width: 24px; height: 24px; padding: 2px; margin-right: 11px;" alt="">Para PetLovers</a>

      </ul>
    </div>
    <div class="dropdown show d-inline col-md-2">
      <a class="btn  dropdown-toggle  color-text" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ofertas
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle  font-weight-bold" href="#">Oferta #1</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle  font-weight-bold" href="#">Oferta #2</a>


      </ul>
    </div>
    <div class="dropdown show d-inline col-md-2">
      <a class="btn  dropdown-toggle  color-text" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Servicios
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle  font-weight-bold" href="#">Servicio #1</a>
        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle  font-weight-bold" href="#">Servicio #2</a>


      </ul>
    </div>
    <div class="show d-inline col-md-2">
      <a class="btn color-text" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Blog
      </a>
    </div>
    <div class="d-inline ">
      <a href="#"><img src="{{asset('img/member.PNG')}}" alt="LAIKA MEMBER" aria-label="LAIKA MEMBER"></a>
    </div>
  </div>

  <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/beneficiosbanner.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/logobanner.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/1643521062BANNER (2).jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  <div class="container">
    <h3 class="font-weight-bold color-text subtitulo">Categoria </h3>
  </div>
  <div id="cat" class="container ">
    <div class="card d-inline-block ">
      <div class="card-body ">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconAlimento.png')}}" style="width: 24px; height: 24px;" alt=""> Alimentos</a>
      </div>
    </div>
    <div class="card d-inline-block">
      <div class="card-body">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconSnack.png')}}" style="width: 24px; height: 24px;" alt=""> Snacks</a>
      </div>
    </div>
    <div class="card d-inline-block">
      <div class="card-body ">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconFarmapet.png')}}" style="width: 24px; height: 24px;" alt=""> Farmapet</a>
      </div>
    </div>
    <div class="card d-inline-block">
      <div class="card-body">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconCuidado.png')}}" style="width: 24px; height: 24px;" alt=""> Cuidado e Higiene</a>
      </div>
    </div>
    <div class="card d-inline-block">
      <div class="card-body ">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconJuguete.png')}}" style="width: 24px; height: 24px;" alt=""> Juguetes</a>
      </div>
    </div>
    <div class="card d-inline-block">
      <div class="card-body">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconCategoria.png')}}" style="width: 24px; height: 24px;" alt=""> Accesorios</a>
      </div>
    </div>
    <div class="card d-inline-block">
      <div class="card-body ">
        <a href="#" class="font-weight-bold text-dark"><img src="{{asset('img/iconPetLovers.png')}}" style="width: 24px; height: 24px;" alt=""> Para PetLovers</a>
      </div>
    </div>
  </div>
  <div class="container">
    <h3 class="font-weight-bold color-text subtitulo">Marcas destacadas</h3>
  </div>
  <div id="marcas" class="container">

    <div class="round d-inline">
      <img src="{{asset('img/imgBarf.png')}}" class="d-inline round " alt="...">
    </div>
    <div class=" round d-inline">
      <img src="{{asset('img/imgHills.png')}}" class="d-inline round" alt="...">
    </div>
    <div class=" round d-inline">
      <img src="{{asset('img/imgEuka.png')}}" class="d-inline round" alt="...">
    </div>
    <div class=" round d-inline">
      <img src="{{asset('img/imgCanito.png')}}" class="d-inline round" alt="...">
    </div>
    <div class=" round d-inline">
      <img src="{{asset('img/imgMax.png')}}" class="d-inline round" alt="...">
    </div>
    <div class=" round d-inline">
      <img src="{{asset('img/imgSalvaje.png')}}" class="d-inline round" alt="...">
    </div>
  </div>
  <div id="productos" class="container">
    <div class="row">
      @forelse($products as $product )
      <div class="card d-inline col resp ">

        <img class="card-img-top" src="{{ asset("{$product['img']}") }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$product["nombre"]}}</h5>
          <div>
            <img class="star" src="{{asset('img/estrella.png')}}" alt="">
            <img class="star" src="{{asset('img/estrella.png')}}" alt="">
            <img class="star" src="{{asset('img/estrella.png')}}" alt="">
            <img class="star" src="{{asset('img/estrella.png')}}" alt="">
            <img class="star" src="{{asset('img/estrella.png')}}" alt="">
          </div>
          <div class="row">
            <div class="col-md-5">
              <h4 class="d-inline">${{$product["precio"]}}</h4>
            </div>

            <div class="col-md-7">
              <div class="row d-inline">
                <p class="text-muted font-weight-bold d-inline p-0 m-0" style="font-size: 12px;">Antes</p>
              </div>
              <br>
              <div class="row d-inline">
                <p class="text-muted font-weight-bold d-inline p-0 m-0" style="font-size: 12px;"><s>${{$product["precioAnterior"]}}</s></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h4 class="d-inline text-danger">${{$product["PrecioMember"]}}</h4>
            </div>

            <div class="col-md-7">
              <div class="row d-inline">
                <img src="{{asset('img/laikamemeber.svg')}}" alt="">
              </div>
              <br>
              <div class="row d-inline">
                <img src="{{asset('img/adquiere.PNG')}}" alt="">
              </div>
            </div>
          </div>
          <div class="row" style="height: 40px;">
            <div id="buttonGr" class="col-sm-4 font-weight-bold text-light">
              {{$product["gramos"]}}
            </div>
          </div>

          <div id="cartB" class="row">
            <a href="#" class="btn text-light font-weight-bold"><i class="fas fa-shopping-cart"></i> Añadir al carrito</a>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
  <div id="foo" class="container border">
    <div class="row">
      <div class="col d-inline">
        <img src="{{asset('img/footerLaika.png')}}" alt="">
        <p class="color-text font-weight-bold"> Siguenos en: <br><img src="{{asset('img/youtube-brands.svg')}}" class="dim" alt="">
          <img src="{{asset('img/instagram-brands.svg')}}" class="dim" alt="">
          <img src="{{asset('img/facebook-square-brands.svg')}}" class="dim color-text" alt="">
        </p>
      </div>
      <div class="col d-inline text-left">

        <ul class="list-unstyled">
          <li>
            <h5 class="color-text">ACERCA DE LAIKA</h5>
          </li>
          <li> <a href="#" class="color-text text-decoration-none"> Sobre Laika</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Servicios</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Trabaja con nosotros</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Blog</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Términos y condiciones</a> </li>
        </ul>
      </div>
      <div class="col d-inline text-left">
        <ul class="list-unstyled">
          <li class="">
            <h5 class="color-text">LINK DE INTERÉS</h5>
          </li>
          <li> <a href="#" class="color-text text-decoration-none"> Preguntas frecuentes</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> ¿Cómo comprar en Laika?</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Política de privacidad</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Contáctanos</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Políticas de entrega</a> </li>
        </ul>
      </div>
      <div class="col d-inline text-left">
        <ul class="list-unstyled">
          <li class="">
            <h5 class="color-text">INFORMACIÓN</h5>
          </li>
          <li> <a href="#" class="color-text text-decoration-none"> Teléfono: 3009108496 </a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> servicioclientes@laika.com.co</a> </li>
          <li> <a href="#" class="color-text text-decoration-none"> Bogotá D.C., Colombia</a> </li>
        </ul>
      </div>
      <div class="col d-inline text-left">
        <ul class="list-unstyled">
          <li class="">
            <h5 class="color-text">SUSCRÍBETE</h5>
          </li>
          <li> <a href="#" class="color-text text-decoration-none"> Recibe noticias y promociones al instante. </a> </li>
          <li>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Correo electrónico">
              <div class="input-group-append">
                <span class="input-group-text" style="background: rgb(96, 62, 133);"><i class="fas fa-arrow-right text-light"></i></span>
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label color-text" style="font-size:11px " for="flexCheckDefault">
                <em> He leido y acepto las políticas de privacidad</em>
              </label>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <div id="footer" style="background: rgb(240,241,243)">
    <div class="container text-center">
      <img src="{{asset('img/footer.PNG')}}" style="width:100% !important" alt="">
    </div>

  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>