<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - Transportes logísticos y servicios de ingeniería</title>
    <link href="{{ asset('theme/images/icon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link rel="canonical" href="{{ config('app.url') }}">

    <meta name="description" content="Empresa de transporte, carga líquida y seca, suministro de busetas, camionetas, maquinaria, auxiliares viales, y servicios de ingeniería en asesoría, formulación y evaluación de proyectos.">
    <meta name="keywords" content="empresa, transporte, carga, carga líquida, carga seca, cama baja, camabaja, camionetas, busetas, maquinaria, auxiliares viales, ingeniería civil, ingeniería ambiental, asesoría, formulación, evaluación, proyectos, infraestructura, obras, PMA, MMA, EIA">
    <meta name="author" content="Transportes logísticos y servicios de ingeniería S.A.S.">

    <meta property="og:title" content="Transportes logísticos y servicios de ingeniería S.A.S.">
    <meta property="og:description" content="Empresa de transporte, carga líquida y seca, suministro de busetas, camionetas, maquinaria, auxiliares viales, y servicios de ingeniería en asesoría, formulación y evaluación de proyectos.">
    <meta property="og:image" content="{{ asset('theme/images/logo.png') }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tlsi.com.co/">
    <meta property="og:site_name" content="TLSI">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/tlsi.css') }}">
    {!! htmlScriptTagJsApi() !!}
</head>
<body id="page-top">
    @include('flash::message')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">{{ config('app.name') }}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Conoce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">¡Bienvenidos a TSLI!</div>
                <div class="intro-heading text-uppercase">Logística segura</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Conoce más</a>
            </div>
        </div>
    </header>
    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h1 class="section-heading text-uppercase">Transportes logísticos y servicios de ingeniería S.A.S.</h1>
                </div>
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Transporte terrestre e ingeniería con experiencia.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-truck-moving fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Carga líquida y seca</h4>
                    <p class="text-muted">Transporte de hidrocarburos en tractocamión con tanque, maquinaria y equipo en tractocamión con cama baja.</p>
                </div>

                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shuttle-van fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Busetas</h4>
                    <p class="text-muted">Transporte del personal (operativo y administrativo) en busetas.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-truck-pickup fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Camionetas</h4>
                    <p class="text-muted">Movilización de personal staff y logística operativa.</p>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Maquinaria</h4>
                    <p class="text-muted">Suministramos maquinaria de construcción, línea amarilla o pesada.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-hard-hat fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ingeniería</h4>
                    <p class="text-muted">Asesorías  en ingeniería civil y ambiental, PMA, MMA y EIA, formulación y evaluación de proyectos.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-green"></i>
                    <i class="fas fa-road fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Auxiliares viales</h4>
                    <p class="text-muted">Suministramos personal para el apoyo de la logística en las operaciones viales, para controlar el flujo vehicular.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Equipos y maquinaria.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="theme/images/portfolio/truck.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tractocamión</h4>
                        <p class="text-muted">Cama bajas y tanques</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="theme/images/portfolio/bus.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Busetas</h4>
                        <p class="text-muted">Vans - Micro</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="theme/images/portfolio/pickup.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Camionetas</h4>
                        <p class="text-muted">Pickup</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="theme/images/portfolio/machinery.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Maquinaria</h4>
                        <p class="text-muted">Línea amarilla</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="theme/images/portfolio/engineer.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Ingeniería</h4>
                        <p class="text-muted">Asesorías, formulación y evaluación</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="theme/images/portfolio/aux.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Auxiliares</h4>
                        <p class="text-muted">Control de tráfico</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Conoce {{ config('app.name') }}</h2>
                    <h3 class="section-subheading text-muted">Nuestra historia.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="theme/images/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Año 2017</h4>
                                    <h4 class="subheading">Inicia el sueño</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">TRANSPORTES LOGÍSTICOS Y SERVICIOS DE INGENIERÍA S.A.S , es una empresa de transporte creada el 17 de septiembre de 2017, que surge con el fin de cubrir las necesidades de movilidad de las empresas contratistas y de comunidad de San Martín – Cesar y de sus zona aledañas en donde se ejecutan proyectos del sector de hidrocarburos, logrando posicionarse como una empresa líder, con un alto compromiso, responsabilidad social  y ambiental que durante años ha servido como soporte fundamental  para las partes interesadas en transportar a sus colaboradores, con la certeza de que han contratado un servicio de calidad, con la experiencia necesaria para cumplir con los requerimientos exigidos, buscando siempre optimizar sus servicios. Formaremos parte del desarrollo industrial de nuestra región ofreciendo el mejor servicio de transporte, seremos los aliados en logística por excelencia.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="theme/images/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2019-2020</h4>
                                    <h4 class="subheading">Rumbo a la consolidación</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Han sido años duros pero con mucho aprendizaje, los cuales nos han permitido perfeccionar nuestra operación. Lo más importante ha sido la satisfacción de nuestros clientes y aliados, es por ello que para el 2020 queremos ser una empresa líder en el transporte de carga líquida y seca en el mercado nacional, con un alto grado de confiabilidad y honestidad, resaltando el compromiso por contribuir y aportar al desarrollo de nuestro país.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Se parte
                                    <br>de nuestra
                                    <br>Historia!
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="bg-light page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="section-heading text-uppercase">Ubicación</h2>
                </div>
            </div>
            <div class="row">
                <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.9570014311225!2d-73.51637768551282!3d8.00337149423631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5d7d6b70f32465%3A0xcc969f3ca4772b27!2sTLSI%3A%20Trasportes%20Log%C3%ADsticos%20y%20Servicios%20de%20Ingenier%C3%ADa%20s.a.s!5e0!3m2!1ses!2sco!4v1575733422834!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="my-2" style="padding: 0 0 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="section-heading text-uppercase">Clientes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                    <img class="img-fluid d-block mx-auto" src="theme/images/logos/ecopetrol.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                    <img class="img-fluid d-block mx-auto" src="theme/images/logos/berau.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                    <img class="img-fluid d-block mx-auto" src="theme/images/logos/gtec.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                    <img class="img-fluid d-block mx-auto" src="theme/images/logos/mt.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contacto</h2>
                    <h3 class="section-subheading text-white">Escríbenos y hagamos equipo.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" action="{{ route('contact') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Tu nombre *" required="required" data-validation-required-message="Por favor ingresa tu nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="emal" type="email" placeholder="Tu correo *" required="required" data-validation-required-message="Por favor ingresa tu dirección de correo electrónico">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Tu teléfono *" required="required" data-validation-required-message="Por favor ingreso tu número telefónico">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Tu mensaje *" required="required" data-validation-required-message="El mensaje lo puedes escribir aquí"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                {!! htmlFormSnippet() !!}
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h4>Dirección</h4>
                    <ul class="list-group list-group-flush text-left">
                        <li class="list-group-item"><i class="fas fa-map-marker"></i> Carrera 7 No. 15 - 56</li>
                        <li class="list-group-item"><i class="fas fa-map-marked"></i> Barrio El Centro</li>
                        <li class="list-group-item"><i class="fas fa-map"></i> San Martín, Cesar, Colombia</li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h4>Teléfonos</h4>
                    <ul class="list-group list-group-flush text-left">
                        <li class="list-group-item"><i class="fas fa-mobile-alt"></i> 317 642 4421</li>
                        <li class="list-group-item"><i class="fas fa-mobile-alt"></i> 314 248 9988</li>
                        <li class="list-group-item">Líneas servicio 24 horas <i class="fas fa-hand-point-down"></i></li>
                        <li class="list-group-item"><i class="fas fa-mobile"></i> 315 506 2562</li>
                        <li class="list-group-item"><i class="fas fa-mobile"></i> 314 2476069</li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h4>Horario</h4>
                    <ul class="list-group list-group-flush text-left">
                        <li class="list-group-item"><b>Lunes-Viernes</b>: 8:00 AM-12:00, 2:00 PM-6:00 PM</li>
                        <li class="list-group-item"><b>Sábados</b>: 8:00 AM-12:00</li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h4>Redes sociales</h4>
                    <img class="img-fluid m-3" style="max-width: 70%; margin: 0 auto;" src="{{ asset('theme/images/logo.png') }}"></img>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/TLSI-100639641433481/?modal=admin_todo_tour" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/servicioespecialtlsi/?hl=es-la" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <span class="copyright">Derechos de autor &copy; {{ config('app.name') }} {{ date('Y') }} - Powered by <a class="text-green" href="https://omarbarbosa.com">Omar Barbosa</a></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Tractocamión</h2>
                                <p class="item-intro text-muted">Cama bajas y tanques.</p>
                                <img class="img-fluid d-block mx-auto" src="theme/images/portfolio/truck.jpg" alt="">
                                <p>Nos especializamos en transporte de carga seca utilizando tractocamiones con cama baja, contamos con personal altamente entrenado y experimentado en izaje de cargas. Apoyamos el desarrollo de la industria petrolera de la región, para lo cual contamos con tractocamiones con tanque para el transporte de hidrocarburos, lámina de acero al carbon y acero inoxidable, los cuales están equipados con elementos contra incendio y anti derrame, operamos bajo protocolos y estándares de seguridad.!</p>
                                <button class="btn btn-primary btn-green" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Busetas</h2>
                                <p class="item-intro text-muted">Vans - Micro.</p>
                                <img class="img-fluid d-block mx-auto" src="theme/images/portfolio/bus.jpg" alt="">
                                <p>El transporte del personal es un aspecto fundamental, garantizamos los desplazamientos con busetas dotadas de todos los elementos de seguridad, y personal idóneo al volante, entendemos la alta responsabilidad de este ejercicio.!</p>
                                <button class="btn btn-primary btn-green" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Camionetas</h2>
                                <p class="item-intro text-muted">Pickups.</p>
                                <img class="img-fluid d-block mx-auto" src="theme/images/portfolio/pickup.jpg" alt="">
                                <p>Somos aliados en el desarrollo de las operaciones de las empresas del sector, para ello contamos con camionetas pickup, dotadas con los elementos necesarios en la seguridad vial, nuestros conductores están capacitados en manejo defensivo y buenas practicas.!</p>
                                <button class="btn btn-primary btn-green" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Maquinaria</h2>
                                <p class="item-intro text-muted">Línea amarilla.</p>
                                <img class="img-fluid d-block mx-auto" src="theme/images/portfolio/machinery.jpg" alt="">
                                <p>Suministramos toda la maquinaria necesaria para llevar a cabo construcciones y mantenimientos de infraestructuras: Bulldozer, retroexcavadora y retrocargador, motoniveladora, vibrocompactadores, cargadores, montacargas, minicargador, telehandler, y demás.!</p>
                                <button class="btn btn-primary btn-green" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Ingeniería</h2>
                                <p class="item-intro text-muted">Asesorías, formulación y evaluación.</p>
                                <img class="img-fluid d-block mx-auto" src="theme/images/portfolio/engineer.jpg" alt="">
                                <p>Servicios en el área de ingeniería civil y ambiental, brindando asesorías en la elaboración de PMA, MMA y EIA , formulación y evaluación de proyectos viales, diseños de pavimentos flexibles y rígidos, asesorías en ensayos de laboratorio de pavimentos, suelos y geotecnia. También apoya la logística en la operación y mantenimiento de vías, implementación de medición de indicadores, mantenimiento de infraestructuras como vías, obras de arte y de estructuras de contención.!</p>
                                <button class="btn btn-primary btn-green" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Auxiliares viales</h2>
                                <p class="item-intro text-muted">Logística en carreteras.</p>
                                <img class="img-fluid d-block mx-auto" src="theme/images/portfolio/aux.jpg" alt="">
                                <p>Apoyamos las operaciones en las vías de la región, suministrando personal para el control del tráfico en construcciones y mantenimientos, movilizaciones, y demás.!</p>
                                <button class="btn btn-primary btn-green" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/tlsi.js') }}"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    <script type="application/ld+json" async>
        {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "name": "TLSI S.A.S.",
            "alternateName": "Transportes logísticos y servicios de ingeniería S.A.S.",
            "url": "https://tlsi.com.co",
            "image": "{{ asset('theme/images/logo.png') }}",
            "description": "Empresa de transporte, carga líquida y seca, suministro de busetas, camionetas, maquinaria, auxiliares viales, y servicios de ingeniería en asesoría, formulación y evaluación de proyectos."
        }
    </script>
</body>
</html>
