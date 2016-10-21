@extends('admin.index')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center titulo-noticia">{{$noticia->titulo}}</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-md-12">
            <img src="{{url('banner/')}}/{{$noticia->url_image}}" class="img-responsive" />
        </div>
    </div>
    <div class="col-md-12" style="background-color: #fff;padding: 15px">
        <div class="area-texto text-left">
            {!! $noticia->descricao !!}
        </div>
        <div class="area-voltar text-left">
            <a class="btn btn-primary" href="javascript:history.back()">Voltar</a>
        </div>
    </div>

@endsection