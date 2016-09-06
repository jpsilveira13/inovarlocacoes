<html>
<style type="text/css">
    .css_btn_class {
        font-size:16px;
        font-family:Arial;
        font-weight:bold;
        -moz-border-radius:8px;
        -webkit-border-radius:8px;
        border-radius:8px;
        border:1px solid #337fed;
        padding:9px 18px;
        text-decoration:none;
        background:-moz-linear-gradient( center top, #3d94f6 5%, #1e62d0 100% );
        background:-ms-linear-gradient( top, #3d94f6 5%, #1e62d0 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
        background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #3d94f6), color-stop(100%, #1e62d0) );
        background-color:#3d94f6;
        color:#ffffff;
        display:inline-block;
        text-shadow:1px 1px 0px #1570cd;
        -webkit-box-shadow:inset 1px 1px 0px 0px #97c4fe;
        -moz-box-shadow:inset 1px 1px 0px 0px #97c4fe;
        box-shadow:inset 1px 1px 0px 0px #97c4fe;
    }.css_btn_class:hover {
         background:-moz-linear-gradient( center top, #1e62d0 5%, #3d94f6 100% );
         background:-ms-linear-gradient( top, #1e62d0 5%, #3d94f6 100% );
         filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
         background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #1e62d0), color-stop(100%, #3d94f6) );
         background-color:#1e62d0;
     }.css_btn_class:active {
          position:relative;
          top:1px;
      }
</style>


<body style="margin:0px;">
<table width="100%" border="0" cellspacing="0" cellpadding="50" style="background-color:#BCBCBC; margin:0px;"><tbody><tr><td height="331" valign="top">

            <table width="90%" border="0" align="center" cellpadding="50" style="background-color:#FFFFFF;"><tbody><tr><td>
                        <a style="display: block;text-align: center;margin-bottom: 20px" target="_blank" href="{{ url() }}"><img src="http://www.novo.inovarlocacoes.com.br/img/logoPretaModal.png" title="Inovar Locações"  width="250px"></a>


                        <p>Olá, {{$nome_franqueado}}.</p>
                        <p><strong>{{$nome}}</strong>, entrou em contato!</p><br />
                        <p><strong>Telefone para contato: </strong> ({{$telefone}})</p><br />
                        <p><strong>Email para contato: </strong> {{$email}}</p><br />
                        <h2>Veja o assunto</h2><br />

                        <p >{{$mensagem}}</p>

                        <br />

                        <br>
                        <p>Qualquer dúvida ou sugestão entre em contato com a nossa equipe de suporte  do e-mail <a href="mailto:suporte@inovarlocacoes.com.br"> suporte@inovarlocacoes.com.br</a></p>

                        <p> Desejamos bons negócios e muito sucesso,</p>
                        <p>Equipe Técnica Inovarlocacoes.com.br<br>
                            <a href="mailto:suporte@inovarlocacoes.com.br"> suporte@inovarlocacoes.com.br</a>
                        </p>
                    </td></tr></tbody></table>

        </td></tr></tbody></table>

</body>
</html>