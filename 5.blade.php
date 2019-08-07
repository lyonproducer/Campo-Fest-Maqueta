@section('head')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{Theme::url('lincoln/favicon.png')}}" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


@stop


<div class="home" data-icontenttype="page" data-icontentid="5">

    <header>
        <div class="container-fluid ">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-iz">
                    <div class="logo-principal float-lg-right mb-4 mr-3">
                        <div class="into">
                            <a href="#">
                                <img src="{{Theme::url('congresoganaderia/img/logos/header.png')}}" alt="logo"
                                     class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-der">

                    <div class="bloque w-100 h-100">

                        <div class="social-superior mb-4">
                            Siguenos en:
                            <a href="#" target="_blank" class="ml-2">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x"></i>
                        </span>
                            </a>
                        </div>

                        <div class="infor-der ml-4 d-flex justify-content-lg-start justify-content-sm-center">

                            <div class="column-1 flex-column">

                                <div class="bloque-fecha d-flex justify-content-center font-weight-bold">
                                    <div class="day">15</div>
                                    <div class="month-year text-center align-self-center">
                                        <div class="month">DE FEBRERO</div>
                                        <div class="year">-2018-</div>
                                    </div>
                                </div>

                                <div class="emails text-center mt-4">

                                    <a href="mailto:german.henao@pajonales.com" class="d-block">german.henao@pajonales.com</a>
                                    <a href="mailto:mercadeo@pajonales.com" class="d-block">mercadeo@pajonales.com</a>

                                </div>

                            </div>

                            <div class="column-2 flex-column ml-3 text-center">

                                <div class="phones mt-2">

                                    <div class="first">

                       <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x"></i>
                      </span>

                                        <a href="tel:+3102599133">310 259 9133</a>

                                    </div>

                                    <div class="secondary">

                                        <a href="tel:+3174361360">317 436 1360 - </a>
                                        <a href="tel:+3202515863">320 251 5863</a>

                                    </div>

                                </div>

                                <div class="dire mt-4">
                                    <h4>Hacienda San Isidro Ibagué</h4>
                                    <address>KM 1 Vía norte del Tolima,<br>
                                        Ibagué - Colombia
                                    </address>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>


    </header>

    <section id="slider">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                
                <div class="formulario">
                                        <div class="text-center">
                                          <h3 class="text-uppercase">Vinculate</h3>
                                        </div>
                                        <h5 class="text-uppercase mb-xl-5 mb-lg-4">¡CUPOS LIMITADOS!</h5>
                                        <div class="content-form">
                                            <div class="formerror"></div>
                                            <form id="form4" action="iforms/lead" method="post">
                                                <input type="hidden" name="form_id" value="4">
                                                {{ csrf_field() }}

                                                <div class="row">

                                                    <div class="col-sm-6 pr-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control rounded" id="name"
                                                                   name="name" placeholder="Nombre:" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 pl-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control rounded" id="phone"
                                                                   name="phone" placeholder="Telefono:" required>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-sm-6 pr-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control rounded"
                                                                   id="direccion" name="direccion"
                                                                   placeholder="Direccion:" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 pl-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control rounded" id="city"
                                                                   name="city" placeholder="Ciudad:" required>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-sm-6 pr-sm-2">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control rounded" id="email"
                                                                   name="email" placeholder="Email:" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 pl-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control rounded"
                                                                   id="activity" name="activity"
                                                                   placeholder="Actividad Empresarial:" required>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <textarea class="form-control" id="mensaje" name="mensaje"
                                                                  rows="3" placeholder="Mensaje" required></textarea>

                                                    </div>
                                                </div>

                                                <button type="submit" name="button"
                                                        class="btn btn-success float-right pl-3 pr-3 mt-3">Enviar
                                                </button>

                                            </form>
                                        </div>

                </div>

                <div class="carousel-item active">

                    <div class="capa"></div>
                    <img class="d-block w-100" src="{{Theme::url('congresoganaderia/img/slider/slider1.1.jpg')}}"
                         alt="First slide">

                    <div class="carousel-caption">

                        <div class="container">
                            <div class="row">

                                <div class="col-md-6 d-flex align-items-center colum-iz">

                                    <h5 class="text-uppercase text-left">
                                        CON LA PRESENCIA <br>
                                        DE EXPERTOS CONFERENCISTAS <br>
                                        DE BRASIL Y COLOMBIA<br>
                                    </h5>

                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">

                    <div class="capa"></div>
                    <img class="d-block w-100" src="{{Theme::url('congresoganaderia/img/slider/slider2.jpg')}}"
                         alt="First slide">

                    <div class="carousel-caption">

                        <div class="container">
                            <div class="row">

                                <div class="col-md-6 d-flex align-items-center colum-iz">

                                    <h5 class="text-uppercase text-left">
                                        HERRAMIENTAS QUE PERMITEN <br>
                                        GENERAR MAYOR RENTABILIDAD <br>
                                        PARA EMPRESAS GANADERAS<br>
                                    </h5>

                                </div>
                                

                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </section>

    <section id="infor-video">

        <h2 class="text-center mb-5">Segundo Congreso <br> Internacional de Ganadería Tropical</h2>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 pt-1 mb-lg-0 mb-md-3">

                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/pnn0HYe0T8Q" frameborder="0"
                            allow="encrypted-media" allowfullscreen></iframe>

                </div>

                <div class="col-lg-6 col-md-12">
                    <p class="text-justify">En el marco de la décima versión de Agroshow Pajonales, la feria dinámica
                        más importante del país donde se convocan alrededor de 5.000 visitantes y 200 compañías
                        expositoras, te invitamos a participar del SEGUNDO CONGRESO INTERNACIONAL DE GANADERÍA TROPICAL
                        “Herramientas para el Desarrollo Sustentable de la Ganadería en el Trópico” con expertos
                        conferencistas de Brasil y Colombia y la II feria bovina avalada por Asocebú que contará con la
                        participación de ejemplares de las razas brahman y Gyr, juzgados por jueces extranjeros.</p>

                    <p class="text-justify">Reuniendo así en un solo lugar la mejor genética y todo un núcleo de
                        conocimientos que nos permitan avanzar frente a los desafíos actuales, entregando nuevas
                        herramientas con desarrollos tecnológicos aplicables a nuestras empresas ganaderas.</p>
                </div>

            </div>
        </div>

    </section>

    <section id="cupos">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 bloque-iz pt-2 pb-2">

                    <h2 class="font-weight-bold mt-5 mb-4">¡CUPOS LIMITADOS!</h2>
                    <h4 class="text-center mb-5">Valor $100.000 COP</h4>

                    <div class="subt mb-4">
                        <h5 class="d-inline">Incluye:</h5>
                    </div>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            Certificado de asistencia.
                        </li>
                        <li class="nav-item">
                            1 almuerzo.
                        </li>
                        <li class="nav-item">
                            Ingreso a la feria Agroshow pajonales para el día 15-02-2018
                        </li>
                        <li class="nav-item">
                            Memorias de los conferencistas vía email.
                        </li>
                    </ul>

                </div>

                <div class="col-lg-6 col-md-12 bloque-der">

                    <div class="row">

                        <div class="col-md-11 offset-1">
                            <h4 class="text-uppercase mt-5 mb-4">AGENDA ACADÉMICA</h4>

                            <ul class="nav flex-column">

                                <li class="nav-item d-flex flex-row mb-5">

                                    <img src="{{Theme::url('congresoganaderia/img/tatiane-almeida.png')}}"
                                         alt="tatiane-almeida" width="86" height="86">

                                    <div class="content-der ml-3">

                                        <h5>Taller Teórico - Práctico : Evaluación lineal / Cruzamiento de líneas de
                                            carne y leche.</h5>

                                        <div class="content d-flex flex-row">
                                            <img src="{{Theme::url('congresoganaderia/img/freeicons/band-brasil.png')}}"
                                                 alt="brasil" class="img-fluid mr-3">
                                            <div class="name">Dr. Tatiane Almeida Drummond Tetzner</div>
                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item d-flex flex-row mb-5">

                                    <img src="{{Theme::url('congresoganaderia/img/juan-quintero.png')}}"
                                         alt="tatiane-almeida" width="86" height="86">

                                    <div class="content-der ml-3">

                                        <h5>Desafíos del cambio climático en la reproducción bovina.</h5>

                                        <div class="content d-flex flex-row">
                                            <img src="{{Theme::url('congresoganaderia/img/freeicons/band-colombia.png')}}"
                                                 alt="brasil" class="img-fluid mr-3">
                                            <div class="name">Dr. Juan Carlos Quintero Valencia</div>
                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item d-flex flex-row mb-5">

                                    <img src="{{Theme::url('congresoganaderia/img/ruben-carrillo.png')}}"
                                         alt="ruben-carillo" width="86" height="86">

                                    <div class="content-der ml-3">

                                        <h5>Evolución de los minerales en la suplementacióny manejo de los bovinos.</h5>

                                        <div class="content d-flex flex-row">
                                            <img src="{{Theme::url('congresoganaderia/img/freeicons/band-colombia.png')}}"
                                                 alt="brasil" class="img-fluid mr-3">
                                            <div class="name">Dr Rubén Darío Carrillo Barbosa</div>
                                        </div>

                                    </div>

                                </li>

                                <li class="nav-item d-flex flex-row mb-5">

                                    <img src="{{Theme::url('congresoganaderia/img/bernardo-guerrero.png')}}"
                                         alt="bernardo-guerrero" width="86" height="86">

                                    <div class="content-der ml-3">

                                        <h5>Consideraciones técnica en planes vacúnales reproductivos.</h5>

                                        <div class="content d-flex flex-row">
                                            <img src="{{Theme::url('congresoganaderia/img/freeicons/band-colombia.png')}}"
                                                 alt="brasil" class="img-fluid mr-3">
                                            <div class="name">Dr Bernardo andrés Guerrero Mateus</div>
                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="mapa">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.826855783056!2d-75.1382010852386!3d4.443303896771099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38cf997198da73%3A0xbcb28cfcc16dee25!2sAGROSHOW+PAJONALES!5e0!3m2!1ses!2sve!4v1517435870128" width="100%" height="344" frameborder="0" style="border:0" allowfullscreen></iframe>

    </section>

    <footer class="green-1">

        <div id="footer-top" class="pt-5 pb-4">

            <ul class="nav justify-content-center">

                <li class="nav-item">

                    <div class="bloque-fecha d-flex justify-content-center font-weight-bold">

                        <div class="day">15</div>
                        <div class="month-year text-center align-self-center">
                            <div class="month">DE FEBRERO</div>
                            <div class="year">-2018-</div>
                        </div>

                    </div>

                </li>

                <li class="nav-item text-center followus d-flex flex-wrap align-content-center">
                    <div>
                        <p>Síguenos en:</p>
                        <a href="#" target="_blank">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x"></i>
              </span>
                        </a>
                    </div>

                </li>

                <li class="nav-item text-center phones d-flex flex-wrap align-content-center">
                    <div>
                        <a href="tel:+3102599133" class="d-block mb-1">310 259 9133</a>
                        <a href="tel:+3174361360" class="d-block mb-1">317 436 1360</a>
                        <a href="tel:+3202515863" class="d-block mb-1">320 251 5863</a>
                    </div>
                </li>

                <li class="nav-item text-center emails d-flex flex-wrap align-content-center">
                    <div>
                        <a href="mailto:mercadeo@pajonales.com" class="d-block mb-1">mercadeo@pajonales.com</a>
                        <a href="mailto:german.henao@pajonales.com" class="d-block mb-1">german.henao@pajonales.com</a>
                    </div>
                </li>

                <li class="nav-item text-center address d-flex flex-wrap align-content-center">
                    <div>
                        <h4>Hacienda San Isidro Ibagué</h4>
                        <address>KM 1 Vía norte del Tolima,<br>
                            Ibagué - Colombia
                        </address>
                    </div>
                </li>

            </ul>

        </div>

        <div id="footer-bottom" class="pt-3 pb-3">

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="d-flex justify-content-between">

                            <div class="logo">
                                <a href="https://www.imaginacolombia.com/" target="_blank">
                                    <img src="{{Theme::url('congresoganaderia/img/logos/imagina.png')}}" alt="imagina"
                                         class="img-fluid">
                                </a>
                            </div>

                            <div class="copyright">
                                Copyright © 2018, 2do Congreso de Ganadería Tropical, Todos los derechos reservados.
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </footer>



</div>

@section('scripts')

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{Theme::url('congresoganaderia/css/style.css')}}">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700" rel="stylesheet">


  <script>
      $(document).ready(function () {
          var formid = '#form4';
          $(formid).submit(function (event) {
              // Stop form from submitting normally
              event.preventDefault();

              // Get some values from elements on the page:
              var $form = $(this).serializeArray(),

                  url = $(this).attr("action");

              // Send the data using post
              var posting = $.post(url, $form);
              $(".content-form .formerror").append('<p class="alert bg-primary" role="alert"><span> Enviando mensaje <i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>' +
                  '<span class="sr-only">Loading...</span> </span> </p>')
              // Put the results in a div
              posting.done(function (response) {
                  var content = response.status;

                  if (content == "success") {
                      $(".content-form").html('<p class="alert bg-primary" role="alert"><span>{{trans("iforms::form.form.sent")}}</span> </p>')
                  }
                  else if (content == "fail") {
                      $.each(response.data, function (index, value) {
                          $(".content-form .formerror").append('<p class="alert alert-danger" role="alert"><span>' + value + '</span> </p>');
                      });

                  }
                  else {
                      $(".content-form .formerror").append('<p class="alert bg-primary" role="alert"><span>' + response.message + '</span> </p>')
                  }

              });

          });
      })
  </script>


@stop