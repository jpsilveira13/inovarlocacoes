@extends('layout')
@section('content')

    <div class="row">
        <div class="col-md-12 mt120">
            <div class="hotsite-bg-fundo mb50">
                <div class="contentTopo">
                    <div class="contentBannerContainer" style="background-image:url('{{url('img/bgContainer.jpg')}}');">&nbsp;</div>

                    <div class="detalheBanner">&nbsp;</div>
                    <div class="contentNomeProduto">
                        <div class="container" align="left">
                            <div class="foto"><img src="{{url('img/capa')}}/{{$equipamento->url_imagem}}" border="0" alt="Foto do {{$equipamento->nome}}" width="475" height="475"></div>
                            <h1 style="font-size:35px;">{{$equipamento->nome}}</h1>
                        </div>
                    </div>
                    <div align="left">
                        <div class="aviso">IMAGEM MERAMENTE ILUSTRATIVA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="contentBarraVejaMais">
                <div class="label">Ver mais modelos de</div>
                <div class="select">
                    <select name="modelo_equip" onchange="window.location.href = this.value" id="selectMaisModelos">
                        <option value="">Seleciona uma opção</option>
                        @foreach($equipsCategs as $equipsCateg)
                            <option value="{{url()}}/{{$equipsCateg->catequip->nome}}/{{$equipsCateg->url_site}}">{{$equipsCateg->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row contentInformacoes">

            <div class="col-md-8">
                <div class="pagina">
                    <h2>
                        <span>mais informações</span>
                        <span class="borda-laranja"></span>
                    </h2>
                    <div class="descricao">
                        {!! $equipamento->descricao !!}
                    </div>
                    @if(!empty($equipsTres->first()->id))
                    <div class="dados">
                        <h3 class="text-center">{{$equipsTres->first()->nome}}</h3>
                        <table class="table referencia-dados table-hover">
                            <thead>
                            <tr>
                                <th>Modelo(Nº)</th>
                                <th>Elétrica</th>
                                <th>Revestido</th>
                                <th>Banheiro</th>
                                <th>Entrada Ar.Cond</th>
                                <th>Janelas</th>
                                <th>Portas</th>
                                <th>Especial</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($equipsTres as $equipTres)

                                <tr>
                                    <td><span class="fontTable fontTable">{{$equipTres->modelo}}</span></td>
                                    <td>@if(!empty($equipTres->eletrica))<span class="fontTable">{{$equipTres->eletrica}}</span> @else  <i class="fa fa-times  fa-2x" aria-hidden="true" ></i> @endif </td>
                                    <td>@if($equipTres->revestido == "n") <i class="fa fa-times corNegativo fa-2x" aria-hidden="true"></i>@else<i class="fa fa-check testeAqui corPositivo  fa-2x" aria-hidden="true"></i>@endif</td>
                                    <td><span class="fontTable">{{$equipTres->banheiro}}</span></td>
                                    <td>@if($equipTres->entrada_ar == "n") <i class="fa fa-times corNegativo  fa-2x" aria-hidden="true"></i>@else<i class="fa fa-check corPositivo  fa-2x" aria-hidden="true"></i>@endif</td>
                                    <td><span class="fontTable" >{{$equipTres->janela}}</span></td>
                                    <td><span class="fontTable">{{$equipTres->porta}}</span></td>
                                    <td><span class="fontTable">{{$equipTres->especial}}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr />
                    @endif
                    <div class="dados">
                        <h3 class="text-center">{{$equipsSeis->first()->nome}}</h3>
                        <table class="referencia-dados table-hover">
                            <thead>
                            <tr>
                                <th>Modelo(Nº)</th>
                                <th>Elétrica</th>
                                <th>Revestido</th>
                                <th>Banheiro</th>
                                <th>Entrada Ar.Cond</th>
                                <th>Janelas</th>
                                <th>Portas</th>
                                <th>Especial</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($equipsSeis as $equipSeis)

                                <tr>
                                    <td><span class="fontTable">{{$equipSeis->modelo}}</span></td>
                                    <td>@if(!empty($equipSeis->eletrica))<span class="fontTable">{{$equipSeis->eletrica}}</span> @else  <i class="fa fa-times  fa-2x" aria-hidden="true" ></i> @endif </td>
                                    <td>@if($equipSeis->revestido == "n") <i class="fa fa-times corNegativo fa-2x" aria-hidden="true"></i>@else<i class="fa fa-check corPositivo  fa-2x" aria-hidden="true"></i>@endif</td>
                                    <td><span class="fontTable">{{$equipSeis->banheiro}}</span></td>
                                    <td>@if($equipSeis->entrada_ar == "n") <i class="fa fa-times corNegativo  fa-2x" aria-hidden="true"></i>@else<i class="fa fa-check corPositivo  fa-2x" aria-hidden="true"></i>@endif</td>
                                    <td><span class="fontTable" >{{$equipSeis->janela}}</span></td>
                                    <td><span class="fontTable">{{$equipSeis->porta}}</span></td>
                                    <td><span class="fontTable">{{$equipSeis->especial}}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr />
                    @if(!empty($equipsDoze->first()->id))
                        <div class="dados">
                            <h3 class="text-center">{{$equipsDoze->first()->nome}}</h3>
                            <table class="referencia-dados table-hover">
                                <thead>
                                <tr>
                                    <th>Modelo(Nº)</th>
                                    <th>Elétrica</th>
                                    <th>Revestido</th>
                                    <th>Banheiro</th>
                                    <th>Entrada Ar.Cond</th>
                                    <th>Janelas</th>
                                    <th>Portas</th>
                                    <th>Especial</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($equipsDoze as $equipDoze)

                                    <tr>
                                        <td><span class="fontTable fontTable">{{$equipDoze->modelo}}</span></td>
                                        <td>@if(!empty($equipSeis->eletrica))<span class="fontTable">{{$equipSeis->eletrica}}</span> @else  <i class="fa fa-times  fa-2x" aria-hidden="true" ></i> @endif </td>
                                        <td>@if($equipDoze->revestido == "n") <i class="fa fa-times corNegativo fa-2x" aria-hidden="true"></i>@else<i class="fa fa-check corPositivo  fa-2x" aria-hidden="true"></i>@endif</td>
                                        <td><span class="fontTable">{{$equipDoze->banheiro}}</span></td>
                                        <td>@if($equipSeis->entrada_ar == "n") <i class="fa fa-times corNegativo  fa-2x" aria-hidden="true"></i>@else<i class="fa fa-check corPositivo  fa-2x" aria-hidden="true"></i>@endif</td>
                                        <td><span class="fontTable" >{{$equipSeis->janela}}</span></td>
                                        <td><span class="fontTable">{{$equipDoze->porta}}</span></td>
                                        <td><span class="fontTable">{{$equipDoze->especial}}</span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr />
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="area-form">
                    <h2 class="duvidas">Está com dúvidas</h2>
                    <div class="boxform">
                        <div class="informacao-form">Preencha o formulário abaixo e vamos entrar em contato com você. Selecione a cidade para qual deseja a locação.</div>
                        <form class="form-horizontal" action="#" id="formLigacao">
                            <div class="form-group">
                                <label for="nome" class="col-sm-2 col-xs-2 control-label">Nome:</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input type="nome" required class="form-control input" id="inputEmail3" placeholder="Seu Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 col-xs-2 control-label">Email:</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input type="email" class="input form-control" id="inputEmail3" placeholder="Seu Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="celular" class="col-sm-2 col-xs-2 control-label">Celular:</label>
                                <div class="col-sm-10 col-xs-10">
                                    <input type="text" class="input form-control" id="inputEmail3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="estado" class="col-sm-2 col-xs-2 control-label">Estado:</label>
                                <div class="col-sm-10 col-xs-10">
                                    <select class="input form-control" id="inputEmail3">
                                        <option>Teste</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cidade" class="col-sm-2 col-xs-2 control-label">Cidade:</label>
                                <div class="col-sm-10 col-xs-10">
                                    <select class="input form-control" id="inputEmail3">
                                        <option>cidade</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Origem" class="col-sm-2 col-xs-2 control-label">Origem:</label>
                                <div class="col-sm-10 col-xs-10">
                                    <select class="input form-control" id="inputEmail3">
                                        <option value="">Seleciona uma opção</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Google">Google</option>
                                        <option value="Jornais e Revistas">Jornais e Revistas</option>
                                        <option value="ABF">ABF</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="#">
                        <div class="box-orcamento mb10">
                            <div class="btnLaranja transparenciaHover transicaoPadrao" style="background:none;">QUERO SOLICITAR UM ORÇAMENTO<br>DESTE EQUIPAMENTO<div class="sub">Clique Aqui</div></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>



@endsection