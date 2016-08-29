@extends('layout')
@section('content')

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
    <div id="equipamentos" class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Alugue Containers</h1>
                <hr /><br />
            </div>
            @foreach($containers as $container)

                <a href="{{url('container')}}/{{$container->url_site}}" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
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

                <a href="{{url('maquinas')}}/{{$maquina->url_site}}" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
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

                <a href="{{url('ferramentas')}}/{{$ferramenta->url_site}}" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
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