@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12 mt120">
            <div class="titulo-padrao">
                <h1>A maior locadora de {{$nomeCat}} </h1>
                <p>CLICANDO NOS PRODUTOS VOCÊ PODERÁ FAZER SEU ORÇAMENTO DIRETAMENTE PARA O FRANQUEADO MAIS PRÓXIMO DE VOCÊ.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            @foreach($equipamentos as $equipamento)
                <a href="{{url()}}/{{$equipamento->catequip->url_nome}}/{{$equipamento->url_site}}" class="inovar-produto col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="img-fundo" style="background-color:#f1f1f1;background-size: contain;background-repeat:no-repeat;background-image: url('{{url('img/capa')}}/{{$equipamento->url_imagem}}')">
                        <div class="conteudo-produto" style="top: 190px;background-color: #f7921e;">
                            <div class="linha" style="">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img class="icone" src="http://www.microlins.com.br/galeria/curso/20150415114833996.png">
                                    </div>

                                    <div class="media-body media-middle">
                                        <div class="nome" style="color: #FFFFFF">{{$equipamento->nome}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chamada" style="color: #FFFFFF">
                                {!!  str_limit($equipamento->descricao,100)!!}
                            </div>
                            <div class="linha-second" style="">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <div class="icone-tipo img icone-tradicional-xs"></div>
                                    </div>

                                    <div class="media-body media-middle">
                                        <div class="nome-tipo"><small>{{$equipamento->catequip->nome}}</small><br>{{$equipamento->nome}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <br /><br /><br />
@endsection