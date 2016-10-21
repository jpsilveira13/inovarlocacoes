<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Franqueado</title>

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">

    <!--Icons-->
    <script src="{{asset('admin/js/lumino.glyphs.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{'/admin/home'}}">Portal Inovar</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Olá, {{ strstr(auth()->user()->name,' ',true)  }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Perfil</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Configurações</a></li>
                        <li><a href="{{url('auth/logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Procurar">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="{{url('/admin/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Informações</a></li>

        @if(auth()->user()->tipo > 0)
            <li class="parent"><a href="{{url('admin/gerencia/noticias')}}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg>
                    Criar Notícias</a></li>
            <li class="parent"><a href="{{url('admin/gerencia/arquivos')}}"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg>
                    Criar Manuais</a></li>
            <li class="parent"><a href="{{url('admin/gerencia/usuarios')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>

                    Listagem Usuários</a></li>
            <li class="parent"><a href="{{url('admin/gerencia/arquivos')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>
                    Log de Eventos</a></li>
        @endif

        <li class="parent"><a href="{{url('admin/manuais')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
                Arquivos</a></li>
        <li class="parent"><a href="{{url('admin/videos')}}"><svg class="glyph stroked camcorder"><use xlink:href="#stroked-camcorder"/></svg>
                Vídeo Aulas</a></li>



    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="alert alert-info alert-dismissable">                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                <i class="fa fa-info-circle"></i><strong>Seja bem vindo, </strong> {{auth()->user()->name}}  </div>
    </div><!--/.row-->
    @yield('content')
</div>	<!--/.main-->

<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin/js/chart.min.js')}}"></script>
<script src="{{asset('admin/js/chart-data.js')}}"></script>
<script src="{{asset('admin/js/easypiechart.js')}}"></script>
<script src="{{asset('admin/js/easypiechart-data.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('admin/js/admin.js')}}"></script>

<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })

</script>
</body>

</html>
