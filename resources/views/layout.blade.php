<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

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
    <a href="#ligamosVoce" data-target="#ligamosVoce" data-toggle="modal" title="entrar em contato">
        <img src="{{url('img/btLigamos.png')}}" border="0" alt="Ligamos para você" class="transparenciaFracaHover transicaoPadrao float-shadow2" id="btLigamosParaVoce">
    </a>
</div>
<!-- Navigation -->

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top"><img src="{{url('img/logoTopo.png')}}"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                @if(\Request::is('/'))
                    <li class="page-scroll">
                        <a href="#equipamentos">Equipamentos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Seja um franqueado</a>
                    </li>
                @endif
                <li class="page-scroll">
                    <a href="http://www.inovarlocacoes.com/nossas-unidades" target="_blank">Nossas Unidades</a>
                </li>

                <li class="page-scroll">
                    <a href="http://www.inovarlocacoes.com/sobre-a-inovar" target="_blank">Sobre nós</a>
                </li>
                <li class="page-scroll">
                    <a href="http://www.inovarlocacoes.com/atendimento" target="_blank">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="row">
    <div class="col-md-12">
        <div class="area-pesquisa"> </div>
    </div>
</div>

@yield('content')
        <!-- Header -->
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Localização</h3>
                    <p style="color: #d2d2d2;">Av. Sete, 256
                        <br>Distrito Industrial II<br>
                        Uberaba - MG<br />
                        (34)3314.8702 | (34)3325.8700</p>
                    <a href="http://www.inovarlocacoes.com/nossas-unidades" target="_blank" class="btn btn-default">Veja mais unidades</a>
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
<div class="modal fade in" id="ligamosVoce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myModalLabel">Ligamos para você!</h4>
            </div>
            <div class="modal-body">
                <div class="hide-body">
                    <img class="img-responsive center-block borda-image" src="{{url('img/logoPretaModal.png')}}">
                    <hr />
                    <h2 class="titulo-modal">Preencha os formulário</h2>
                </div>
                <form id="emailLigamos" class="form-modal" action="">

                    <div class="form-group">
                        <input class="form-control input transicaoPadrao" type="text" placeholder="Informe seu nome ou da empresa">
                    </div>
                    <div class="form-group">
                        <input class="form-control input transicaoPadrao" type="text" placeholder="Informe seu telefone de contato">
                    </div>
                    <div class="form-group">
                        <input class="form-control input transicaoPadrao" type="email" placeholder="Informe seu e-mail">
                    </div>
                    <div class="form-group">
                        <select class="form-control input transicaoPadrao">
                            <option value="">Selecione o seu estado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control input transicaoPadrao">
                            <option value="">Selecione a sua cidade</option>
                        </select>
                    </div>
                    <div class="text-center">

                        <button id="btnLigar" type="submit" class="transicaoPadrao transparenciaFracaHover float-shadow2">Enviar</button>
                        <div class="labelBotao">Vamos entrar em contato com você </div>
                    </div>
                </form>
                <!-- Sucesso -->
               <!-- <div id="divSucessoAmigo" class="sucesso-modal tab-pane tab-absolute">
                    <div class="text-center">
                        <p>Anúncio enviado com sucesso!<br><br> Aproveite e veja outros anúncios</p>
                        <div id="btnFecharDenuncie" data-dismiss="modal" class="center-button btn-fechar-denuncie">
                            <a href="#" class="btn btn-zap">Fechar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                Ao enviar, você concorda com os <a href="#" target="_blank">Termos de Uso</a> e a <a href="" target="_blank">Política de Privacidade</a> do Sempre da negócio.
            </div> -->
        </div>
    </div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
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
