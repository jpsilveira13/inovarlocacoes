@extends('admin.index')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Principal</h1>
        </div>
    </div><!--/.row-->
    <div style="margin-bottom: 10px" class="row">
        <div class="col-lg-12">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i = 1; $i<=3;$i++)
                        <li data-target="#carousel-example" data-slide-to="{{$i}}" class="@if($i == 0) active @endif"></li>
                    @endfor

                </ol>

                <div class="carousel-inner">
                    <?php $i = 0; ?>
                    @foreach($noticias as $noticia)

                        <div class="item <?php if($i == 0){echo 'active';}?>">
                            <a href="{{'/admin/noticia'}}/{{$noticia->url_site}}"><img src="{{url('img/noticia')}}/{{$noticia->url_image}}" /></a>
                            <div class="carousel-caption">
                                <h3>{{$noticia->titulo}}</h3>

                                <p>{!!str_limit($noticia->descricao,$limit = 165, $end="...")  !!}</p>
                            </div>
                        </div>
                        <?php $i++;?>
                    @endforeach

                </div>

                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div><!--/.row-->
    <div class="row">
        <a href="{{url('admin/videos')}}">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Escola Inovar</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="100" ><span class="percent glyphicon glyphicon-pencil"></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="http://inovarlocacoes.com/webmail" target="_blank">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Email</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="100" ><span class="percent glyphicon glyphicon-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="col-xs-6 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Proloc</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="100" ><span class="percent glyphicon glyphicon-thumbs-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body easypiechart-panel">
                    <h4>Visitors</h4>
                    <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

@endsection