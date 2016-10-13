@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-12 mt120">
            <div class="titulo-padrao">
                <h1>ENTRE EM CONTATO CONOSCO</h1>
                <p>PRA ENTRAR EM CONTATO COM A MATRIZ DA INOVAR LOCAÇÕES BASTA PREENCHER ABAIXO. RESPONDEREMOS SEU CONTATO EM ATÉ 24H.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-6">
                <div class="pagina contato">
                    <h2>Informações de contato</h2>
                    <span class="borda-laranja"></span>
                    <div class="coluna">
                        <h3>CONTATO PARA FRANQUEADORA:</h3>
                        <p>(34)3314.8702 | (34)3325.8700</p>
                        <h3>NOSSO ENDEREÇO</h3>
                        <p>Av. Sete, 256 </p>
                        <p>Distrito Industrial II</p>
                        <p>Uberaba - MG</p>
                        <h3>LOCALIZAÇÃO</h3>
                        <div class="mapa" id="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.302555869383!2d-47.965425685785775!3d-19.699738936275814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDQxJzU5LjEiUyA0N8KwNTcnNDcuNiJX!5e0!3m2!1spt-BR!2sbr!4v1473192238105" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <h3>REDE SOCIAL:</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/inovarlocacoesoficial" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/inovarlocacoesoficial" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/inovarlocacoesoficial">Inovar Locações - Brasil</a></blockquote></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form  id="formContact" class="mt15 contato-estilo">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">DIGITE SEU NOME (OBRIGATÓRIO)</label>
                                <input required type="text" name="nome" class="form-control input" id="nome" data-validation-required-message="Por favor entre com o nome">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                                <input required name="telefone" type="text" class="form-control input" maxlength="15" id="telefone" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="como nos conheceu">COMO VOCÊ FICOU SABENDO DA INOVAR LOCAÇÕES? (OBRIGATÓRIO)</label>
                                <select name="conheceu" class="input form-control">
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
    <br /><br /><br />
@endsection