@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="margin-top: 0" class="page-header">Usuários</h1>
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
                <div class="panel-heading">Listagem usuários Notícias</div>
                <div class="panel-body">
                    <div class="pull-left"><a class="btn btn-lg btn-primary" href="{{url('auth/register')}}">Novo Usuário</a></div><br /><br /><br />
                    <div class="pull-left search"><input class="form-control" type="text" placeholder="Pesquisar"></div>
                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-responsive striped table-str" data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" >ID</th>
                            <th data-field="titulo" data-sortable="true">Nome</th>

                            <th data-field="data" data-sortable="true">Cidade/Franquia</th>
                            <th data-field="data" data-sortable="true">Data de criação</th>
                            <th data-field="data" data-sortable="true">Log de Eventos</th>

                            <th data-field="price" data-sortable="true">Deletar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($franqueados as $franqueado)
                            <tr>
                                <td class="vertical-middle">{{$franqueado->id}}</td>
                                <td class="vertical-middle" style="text-align: left">{{$franqueado->user->name}}</td>
                                <td class="vertical-middle" style="text-align: left">{{$franqueado->cidade->nome}}</td>

                                <td class="vertical-middle">{{ date("d/m/Y H:i:s", strtotime($franqueado->created_at)) }}</td>
                                <td class="vertical-middle"><a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td class="vertical-middle"><a class="delete btn btn-danger btn-xs" href="{{route('usuarios.delete',['id' => $franqueado->id])}}"><span class="glyphicon glyphicon-trash"></span></a></td>
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
                {!! $franqueados->render() !!}
            </div>
        </div>
    </div>
@endsection