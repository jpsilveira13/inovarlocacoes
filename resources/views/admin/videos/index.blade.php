@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Notícias</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem Notícias</div>
                <div class="panel-body">

                    <div class="pull-left search"><input class="form-control" type="text" placeholder="Pesquisar"></div>
                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-responsive striped table-str" data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" >ID</th>
                            <th data-field="titulo" data-sortable="true">Título</th>
                            <th data-field="ativo"  data-sortable="true">Ativo</th>
                            <th data-field="data" data-sortable="true">Data Criação</th>
                            <th data-field="edit" data-sortable="true">Editar</th>
                            <th data-field="price" data-sortable="true">Deletar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($noticias as $noticia)
                            <tr>
                                <td class="vertical-middle">{{$noticia->id}}</td>
                                <td class="vertical-middle" style="text-align: left">{{$noticia->titulo}}</td>

                                <td class="vertical-middle">@if($noticia->ativo != 1)<span class="label label-warning">Não Ativo</span> @else <span class="label label-primary"> Ativo</span> @endif</td>
                                <td class="vertical-middle">{{ date("d/m/Y H:i:s", strtotime($noticia->created_at)) }}</td>
                                <td class="vertical-middle"><a class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class="vertical-middle"><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $noticias->render() !!}
            </div>
        </div>
    </div>
@endsection