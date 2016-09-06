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
                    <div class="dados">
                        <h3 style="background-image:url('{{url('img/icoDimensoes.png')}}');">Dimensões</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 style="background-image:url('{{url('img/icoArmazenamento.png')}}');">Utilidades</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 style="background-image:url('{{url('img/icoSeguranca.png')}}');">Segurança</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <!-- <h3 style="background-image:url('{{url('img/icoUtilidade.png')}}');">Segurança</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                    </div>
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