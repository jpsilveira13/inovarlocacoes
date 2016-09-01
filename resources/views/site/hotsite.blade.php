@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12 mt120">
            <div class="hotsite-bg-fundo mb50">
                <div class="contentTopo">
                    <div class="contentBannerContainer" @if($franqueado->url_bg)style="background-image:url('{{url('img/bg_franqueado')}}/{{$franqueado->url_bg}}');" @else style="background-image:url('{{url('img/bg_franqueado/bg_default_franqueado.jpg')}}');"   @endif  >&nbsp;</div>

                    <div class="detalheBanner">&nbsp;</div>
                    <div class="contentNomeProduto">
                        <div class="container" align="left">
                            <div class="foto-franqueado"><img src="@if($franqueado->url_capa) {{url('img/capa_franqueado')}}/{{$franqueado->url_capa}} @else {{url('img/capa_franqueado/capa_default_franqueado.jpg')}} @endif" border="0" alt="Foto da unidade de {{$franqueado->cidade->nome}} - {{$franqueado->estado->uf}} " /></div>
                            <h1 class="franq-loca">Unidade {{$franqueado->cidade->nome}} - {{$franqueado->estado->uf}}</h1>
                            <div class="email-franqueado"><p>{{$franqueado->user->email}}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row contentInformacoes">
            <div class="col-md-8 mt13">
                <div class="pagina">
                    <h2 class="corLaranja">Sobre a unidade {{$franqueado->cidade->nome}} - {{$franqueado->estado->uf}} </h2>
                    <div class="descricao">
                        <b>Está buscando por Aluguel ou Locação de Container em {{$franqueado->cidade->nome}}?</b>
                        <br /><br />
                        Em {{$franqueado->cidade->nome}} tem Inovar Locações e você ou sua empresa já podem realizar Aluguel ou Locações de Container com toda a praticidade e segurança que só; a maior locadora de containers e equipamentos do Brasil pode oferecer.<br />
                        <br />
                        Você ira encontrar em nosso hotsite todas as informações necessárias para que você possa fazer a escolha certa para a sua necessidade de armazenamento com Containers ou equipamento certo para sua obra. Se você estiver com dúvidas, entre em contato conosco através do nosso telefone ou formulário de contato. Se quiser fazer um orçamento sem compromisso, basta usar nossa ferramenta de orçaamentos.<br />
                        <br />
                        A <strong>Inovar Locações {{$franqueado->cidade->nome}}</strong> trabalha com a Locacões de equipamentos e de Containers para Construção Civil (Obras e Reformas), indústria, comércio, eventos ou ainda para o agronegócio.<br />
                        <br />
                        <u><strong>Sobre os Containers para Locação</strong></u><br />
                        Quando o assunto é Armazenamento, os Containers para Locação da Inovar Locações são incomparáveis no mercado brasileiro.<br />

                        Todos os <strong>Containers da Inovar Locações</strong> oferecem praticidade para serem instalados nos locais mais difíceis. Também são sustentáveis, por substituir os barracos de madeira e alvenaria que geralmente são utilizados para o armazenamento temporário de materiais, insumos, estoques, etc.<br />
                        <br />
                        Os Containers são ótimas soluções para a locação, pois podem ser utilizados para o armazenamento de geral de bens pessoais, bens empresariais, estoque, materiais de constrções (obras e reformas), insumos agrícolas, insumos para eventos, pequenos maquiná;rios, entre tantas outras possibilidades, atendendo perfeitamente empresas de diversos setores como: obras, indústria, comércio, eventos ou ainda para o agronegócio.<br />
                        <br />
                        Se sua necessidade é armazenar, o Container da Inovar Locações e a solução perfeita com o melhor <strong>Custo e Benefício</strong> do mercado.<br />
                        <br />
                        <b>{{$franqueado->cidade->nome}}, locação de Container e de equipamentos é com a Inovar Locações. Os melhores preços com a melhor qualidade. Simplesmente a Maior Locadora de Containers e equipamentos do Brasil.</b>

                    </div>
                    <p></p>
                    <div class="center-block telefone">
                        {{$franqueado->telefone}} / {{$franqueado->celular}}
                    </div>
                    <div class="clearfix"></div>
                    <div class="mapa" id="mapa">
                        {!! $franqueado->mapa  !!}
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
    <div class="row">
        <div class="col-md-12">
            <div class="titulo-padrao">
                <h1>EQUIPAMENTOS</h1>
                <p>CONHEÇA NOSSAS LINHAS DE CONTAINERS, EQUIPAMENTOS E FERRAMENTAS</p>
                <div class="container">
                    @foreach($equipamentos as $equipamento)
                        <a href="{{url()}}/{{$equipamento->catequip->url_nome}}/{{$equipamento->url_site}}" class="inovar-produto col-md-3 col-lg-3 col-sm-4 col-xs-12">
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="titulo-padrao">
                <h1>FOTOGRAFIAS</h1>
                <p>Veja algumas imagens em destaque</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="titulo-padrao">
                <h1>Contato</h1>
                <p>Entre em contato conosco</p>
                <div class="container">
                    <form novalidate id="formContactFranq">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">DIGITE SEU NOME (OBRIGATÓRIO)</label>
                                    <input required type="text" name="nome" class="form-control input" id="nome">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">DIGITE SEU EMAIL (OBRIGATÓRIO)</label>
                                    <input required type="email" class="form-control input" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">DIGITE SEU TELEFONE (OBRIGATÓRIO)</label>
                                    <input required type="text" name="telefone" class="form-control input" id="telefone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="como nos conheceu">COMO VOCÊ FICOU SABENDO DA INOVAR LOCAÇÕES? (OBRIGATÓRIO)</label>
                                   <select class="input form-control">
                                       <option value="">Seleciona uma opção</option>
                                       <option value="Facebook">Facebook</option>
                                       <option value="Google">Google</option>
                                       <option value="Jornais e Revistas">Jornais e Revistas</option>
                                       <option value="ABF">ABF</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mensagem">MENSAGEM (OBRIGATÓRIO)</label>
                                    <textarea required class="input form-control" name="mensagem" id="mensagem" rows="5"></textarea>
                                    <div class="text-center">

                                        <button id="btnFranqueado" type="submit" class="transicaoPadrao transparenciaFracaHover float-shadow2">Enviar</button>
                                        <div class="labelBotao">Vamos entrar em contato com você </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection