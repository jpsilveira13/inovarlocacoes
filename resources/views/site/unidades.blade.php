@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12 mt120">
            <div class="titulo-padrao">
                <h1>ENCONTRE A UNIDADE MAIS PERTO DE VOCÊ!</h1>
                <!--  <p>São mais de <strong>39</strong> unidades por todo o Brasil em pleno crescimento operacional</p> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 bg-escuro mb10">
            <div class="container">

                <form class="form-inline formEstado">
                    <div class="form-group mt8">
                        <label for="estado">SELECIONE O ESTADO PRETENDIDO: </label>
                        <select id="trocaEstado" class="form-control input">
                            <option value="">Escolha uma opção</option>
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}">{{$estado->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mb100 mt50">
        <div class="container mb18">
            <div id="listaFranqueados" class="franqueado-lista">
                @foreach($unidades as $unidade)
                    <div class="item-franquia  mb18 col-xs-12 col-sm-6 col-md-4 float-shadow2 ">

                        <h2>{{$unidade->cidade->nome}} - {{$unidade->estado->uf}}</h2>
                        <div class="box-franqueado text-center">
                            <div class="franquia-telefone">
                                <a href="#" data-msg-telefone="{{$unidade->telefone}}" data-unidade-id="{{$unidade->id}}" class="numero-telefone"><span class="glyphicon glyphicon glyphicon-phone-alt"></span> Ver telefone</a>
                            </div>
                            <div class="franquia-endereco">

                                @if($unidade->cidade_id != 13){{$unidade->endereco}}@else &nbsp; @endif
                            </div>
                        </div>
                        <div class="text-center mt12 mb12">
                            <a href="{{url('unidade')}}/{{$unidade->cidade->url_nome}}">
                                <button id="{{$unidade->id}}" class="call-us btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Ver Hotsite</button>
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection

