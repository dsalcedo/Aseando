<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme/website.css')}}">
    </head>
    <body>
        <div class="site-wrapper full-cover">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{route('website.index')}}">
                                <img src="https://ss1.4sqi.net/img/press/swarm/logo/swarm-white-714794457910397de1c4cb800733e402.png" class="logo-brand">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">¿Cómo funciona?</a></li>
                                <li><a href="#">Precios</a></li>
                                <li><a href="#contact">¿Preguntas?</a></li>
                                <li><a href="#contact">Blog de limpieza</a></li>
                                <li><a href="{{route('website.acceso')}}">Iniciar sesion</a></li>
                                <li class="nav-signup"><a href="#about">¡Quiero trabajar!</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container text-center cover-content">
                <h2 class="titulo text-white">
                    Disfruta de tu tiempo y olvídate de la limpieza
                </h2>
                <h4 class="sub-titulo text-white">
                    Reserva tu limpiador de confianza  desde sólo $85MXN/hora</br>
                    ¡Tú solo dinos dónde, cuándo y nosotros nos encargamos del resto!
                </h4>
                <a href="#" class="btn btn-primario btn-lg top-30">¡Solicita tu servicio!</a>
            </div>



        </div>


<div class="container">
    <img src="http://d304pchb3b61hb.cloudfront.net/img/a/laptop2.jpg" class="img-circle" style="width: 300px;">
    <img src="http://www.encabezadostwitter.com/panel/encabezados/musica-y-relax.jpg" class="img-circle"  style="width: 300px;">
</div>
        <div class="footer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci amet atque corporis eligendi error et fugit hic, inventore ipsa magnam mollitia odit, officia praesentium rerum sed sequi vitae voluptatum.
        </div>
        <script>
            var componente =  {!! json_encode($requierejs) !!};
        </script>
        <script data-main="assets/js/require-setup" src="{{asset('assets/js/require.js')}}"></script>
    </body>
</html>
