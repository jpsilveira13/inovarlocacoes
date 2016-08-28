<!DOCTYPE html>
<html lang="en">

<head>

    <base href="http://www.inovarlocacoes.com.br/">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Locar Containers nunca foi tão fácil com a Inovar Locações. Uma franquia que inova a cada ano que passa e que oferece Containers para armazenamento, habitação e banheiros, com foco em Obras, Reformas, Indústria, Comércio, Eventos e Agropecuária.">
    <meta name="keywords" content="Bunker, Containers, Metalúrgica, Franquia, Franqueados, Brasil, Construção, Civil, Obras, Container, Locar, Aluguel, Locação, Negócio, Armazenamento, Habitação, Eventos, Agrícola, ">
    <meta name="author" content="João Paulo Silveira. FullStack Developer :D">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Inovar Locações">
    <meta property="og:url" content="inicio">
    <meta property="og:title" content="Inovar Locações | Franquia, Locação e Aluguel de Containers">
    <meta property="og:description" content="Locar Containers nunca foi tão fácil com a Inovar Locações. Uma franquia que inova a cada ano que passa e que oferece Containers para armazenamento, habitação e banheiros, com foco em Obras, Reformas, Indústria, Comércio, Eventos e Agropecuária.">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">

    <title>Inovar Locações | Franquia, Locação e Aluguel de Containers</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <!--<link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/freelancer.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<!-- area botao -->
<div class="contentBtLigamosParaVoce">

    <img src="{{url('img/btLigamos.png')}}" border="0" alt="Ligamos para você" class="transparenciaFracaHover transicaoPadrao float-shadow2" id="btLigamosParaVoce">
</div>
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Inovar Locações</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Seja um franqueado</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="row">
    <div class="col-md-12">
        <div class="area-pesquisa">

        </div>
    </div>
</div>
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive mg0" src="{{url('img/banner/home_banner.jpg')}}" alt="">
                <!--<div class="intro-text">
                    <span class="name">Start Bootstrap</span>
                    <hr class="star-light">
                    <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                </div> -->
            </div>
        </div>
    </div>
</header>
<div  class="container">



    <div class="row">
        <div class="col-md-12">
            <h1>Alugue Containers</h1>
            <hr /><br />
        </div>
        @foreach($containers as $container)

            <a href="#" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
                <div class="img-fundo" style="background-image: url('{{url('img/capa')}}/{{$container->url_imagem}}')">
                    <div class="conteudo-produto" style="top: 190px;background-color: #f7921e;">
                        <div class="linha" style="">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="icone" src="http://www.microlins.com.br/galeria/curso/20150415114833996.png">
                                </div>

                                <div class="media-body media-middle">
                                    <div class="nome" style="color: #FFFFFF">{{$container->nome}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="chamada" style="color: #FFFFFF">
                            {{$container->descricao}}
                        </div>
                        <div class="linha-second" style="">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="icone-tipo img icone-tradicional-xs"></div>
                                </div>

                                <div class="media-body media-middle">
                                    <div class="nome-tipo"><small>{{$container->catequip->nome}}</small><br>{{$container->nome}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        <div class="col-md-12">
            <h1>Alugue Máquinas</h1>
            <hr /><br />
        </div>
        @foreach($maquinas as $maquina)

            <a href="#" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
                <div class="img-fundo" style="background-image: url('{{url('img/capa')}}/{{$maquina->url_imagem}}')">
                    <div class="conteudo-produto" style="top: 190px;background-color: #f7921e;">
                        <div class="linha" style="">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="icone" src="http://www.microlins.com.br/galeria/curso/20150415114833996.png">
                                </div>

                                <div class="media-body media-middle">
                                    <div class="nome" style="color: #FFFFFF">{{$maquina->nome}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="chamada" style="color: #FFFFFF">
                            {{$maquina->descricao}}
                        </div>
                        <div class="linha-second" style="">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="icone-tipo img icone-tradicional-xs"></div>
                                </div>

                                <div class="media-body media-middle">
                                    <div class="nome-tipo"><small>{{$maquina->catequip->nome}}</small><br>{{$maquina->nome}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        <div class="col-md-12">

            <h1>Alugue Ferramentas</h1>
            <hr /><br />
        </div>
        @foreach($ferramentas as $ferramenta)

            <a href="#" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
                <div class="img-fundo" style="background-image: url('{{url('img/capa')}}/{{$ferramenta->url_imagem}}')">
                    <div class="conteudo-produto" style="top: 190px;background-color: #f7921e;">
                        <div class="linha" style="">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img class="icone" src="http://www.microlins.com.br/galeria/curso/20150415114833996.png">
                                </div>

                                <div class="media-body media-middle">
                                    <div class="nome" style="color: #FFFFFF">{{$ferramenta->nome}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="chamada" style="color: #FFFFFF">
                            {{$ferramenta->descricao}}
                        </div>
                        <div class="linha-second" style="">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <div class="icone-tipo img icone-tradicional-xs"></div>
                                </div>

                                <div class="media-body media-middle">
                                    <div class="nome-tipo"><small>{{$ferramenta->catequip->nome}}</small><br>{{$ferramenta->nome}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="pd-section-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Seja um Franqueado</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="conteudo-portfolio">
                    <div class="col-md-6 hidden-xs img-fundo-portfolio">
                        <img class="img-responsive" src="{{url('img/bgResumoSejaUmFranqueado.jpg')}}" />
                    </div>
                    <div class="col-md-6">
                        <div class="texto">
                            <p class="titulo">A MAIOR LOCADORA DE CONTAINERS,EQUIPAMENTOS E FERRAMENTAS DO BRASIL</p>
                            <p>Seja um franqueado da Maior Locadora de Containers do Brasil.&nbsp;São mais de 19 franqueados em 17 estados, atendendo a mais de 20 mil clientes.</p>
                        </div>
                        <div class="contentBotao wobble-horizontal">
                            <div>
                                <a href="http://www.inovarfranquias.com.br" target="_blank" class="botaoPadrao transicaoPadrao transparenciaHover float-shadow2">
                                    <span>Saiba mais</span>
                                </a>
                            </div>
                            <div class="label">
                                <a href="http://www.inovarfranquias.com.br" target="_blank" class="transicaoPadrao transparenciaHover" style="color:#282828;">Clique aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->


<!-- Contact Section -->
<!--<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Localização</h3>
                    <p>Av. Sete, 256 Lotes 7 e 8 Quadra 4B
                        <br>Distrito Industrial II<br>
                        Uberaba - MG</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Redes Sociais</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/inovarlocacoesbr" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <!--  <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                          </li> -->
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Selos de qualidade</h3>
                    <div>
                        <a href="http://www.portaldofranchising.com.br/franquia-inovar-locacoes-construcao" target="_blank"> <img class="responsive" src="{{url('img/seloABF.png')}}" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Inovar Locações 2016
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>

<!-- Theme JavaScript -->
<!--<script src="{{asset('js/freelancer.min.js')}}"></script> -->
<script src="{{asset('js/freelancer.js')}}"></script>
</body>

</html>
