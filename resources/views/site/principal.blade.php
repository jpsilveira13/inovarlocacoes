@extends('layout')
@section('content')

    <header>
        <div class="row">
            <div class="col-lg-12">
                <div class="item-fundo">
                    <div class="container">
                        <div class="col-md-6 pull-right col-sm-12 col-xs-12">
                            <h1 class="mt-responsivo">Com o equipamento certo o sucesso da obra é inevitável.</h1>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <section id="equipamentos" style="padding: 0">
            <div class="row">
                <div class="col-sm-4 col1">

                    <div class="cont">
                        <div class="layer active0 bg-container">
                    <span class="headline_small">
                        <h5>Container</h5>
                        <h4>Saiba mais</h4>
                       <a href="{{url('container')}}">
                            <img src="https://www.hercrentals.com/content/dam/herc/home/content/images/landing-arrow.png">
                        </a>
                        <p>Veja os modelos de containers que trabalhos </p>
                    </span>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4 col2">
                    <div class="cont">
                        <div class="layer active0 bg-equipamentos">
                    <span class="headline_small">
                        <h5>Máquinas</h5>
                        <h4>Saiba mais</h4>
                        <a href="{{url('maquinas')}}">
                            <img src="https://www.hercrentals.com/content/dam/herc/home/content/images/landing-arrow.png">
                        </a>
                        <p>Máquinas para o seu projeto é aqui na Inovar Locações. </p>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col1">
                    <div class="cont">
                        <div class="layer active0 bg-materiais">
                    <span class="headline_small">
                        <h5>Ferramentas</h5>
                        <h4>Saiba mais</h4>
                       <a href="{{url('ferramentas')}}">
                            <img src="https://www.hercrentals.com/content/dam/herc/home/content/images/landing-arrow.png">
                        </a>
                        <p>Ferramentas para o seu projeto é aqui na Inovar Locações</p>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="clientes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nossos Clientes</h2>
                    <hr class="star-primary">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 bg-cinza">
                <div class="container itens">
                    <div class="col-md-3 col-sm-6">
                        <img class="img-responsive" src="{{url('img/cocacolacliente.png')}}" alt="Coca Cola" title="Coca Cola" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="{{url('img/clienteambev.jpg')}}" alt="Ambev" title="Ambev" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="{{url('img/hondalogocliente.png')}}" alt="Honda" title="Honda" />
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img src="{{url('img/cafe3coracoescliente.png')}}" alt="Café 3 corações" title="Café 3 corações" />
                    </div>
                </div>

            </div>
        </div>


    </section>

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
                            <img class="img-responsive" src="{{url('img/bgResumoSejaUmFranqueado.png')}}" />
                        </div>
                        <div class="col-md-6">
                            <div class="texto">
                                <p class="titulo">A MAIOR LOCADORA DE CONTAINERS, EQUIPAMENTOS E FERRAMENTAS DO BRASIL</p>
                                <p>Seja um franqueado da Maior Locadora de Containers do Brasil.&nbsp;.</p>
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
    <!-- Contact Section -->
    <!--
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contato</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Informe seu nome" id="name" required data-validation-required-message="Por favor entre com o nome">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Informe o seu email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefone</label>
                                <input type="tel" class="form-control" placeholder="Informe seu telefone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control" placeholder="Informe sua Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    -->
@endsection