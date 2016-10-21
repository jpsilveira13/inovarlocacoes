@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Arquivos</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('alert-success'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success') !!}</em></div>
            @elseif(Session::has('alert-success-delete'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success-delete') !!}</em></div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem Arquivos</div>
                <div class="panel-body">
                    <div class="pull-left"><a class="btn btn-lg btn-primary" href="{{route('arquivos.create')}}">Novo Arquivo</a></div><br /><br /><br />
                    <div class="pull-left search"><input class="form-control" type="text" placeholder="Pesquisar"></div>
                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-responsive striped table-str" data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" >ID</th>
                            <th data-field="titulo" data-sortable="true">Descrição</th>

                            <th data-field="data" data-sortable="true">Data Criação</th>
                            <th data-field="edit" data-sortable="true">Extensão</th>

                            <th data-field="edit" data-sortable="true">Categoria</th>
                            <th data-field="edit" data-sortable="true">Editar</th>
                            <th data-field="price" data-sortable="true">Deletar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($arquivos as $arquivo)
                            <tr>
                                <td class="vertical-middle">{{$arquivo->id}}</td>
                                <td class="vertical-middle">{{str_limit($arquivo->descricao,20)}}</td>
                                <td class="vertical-middle">{{ date("d/m/Y H:i:s", strtotime($arquivo->created_at)) }}</td>
                                <td class="vertical-middle">{{$arquivo->extensao}}</td>
                                <td class="vertical-middle">{{$arquivo->categoria}}</td>
                                <td class="vertical-middle"><a class="btn btn-primary btn-xs" href="{{route('arquivos.edit',['id'=> $arquivo->id])}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td class="vertical-middle"><a class="delete btn btn-danger btn-xs" href="{{route('arquivos.delete',['id' => $arquivo->id])}}"><span class="glyphicon glyphicon-trash"></span></a></td>
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
                {!! $arquivos->render() !!}
            </div>
        </div>
    </div>
@endsection