@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Eventos </h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem Ações Usuários</div>
                <div class="panel-body">
                    <div class="pull-left search"><input class="form-control" type="text" placeholder="Pesquisar"></div>
                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-responsive striped table-str" data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true" >ID</th>
                            <th data-field="titulo" data-sortable="true">Id usuário</th>
                            <th data-field="ativo"  data-sortable="true">Nome</th>
                            <th data-field="ativo"  data-sortable="true">Motivo</th>
                            <th data-field="data" data-sortable="true">Data Criação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td class="vertical-middle">{{$log->id}}</td>
                                <td class="vertical-middle">{{$log->users_id}}</td>
                                <td class="vertical-middle" style="text-align: left">{{$log->nome}}</td>
                                <td class="vertical-middle" style="text-align: left"><span class="label label-primary">{{$log->motivo}}</span></td>

                                <td class="vertical-middle">{{ date("d/m/Y H:i:s", strtotime($log->created_at)) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br />
                <br />
                <div style="margin-left: 12px;padding-bottom: 12px" class="area-voltar text-left">
                    <a class="btn btn-primary" href="javascript:history.back()">Voltar</a>
                </div>
            </div>
        </div>

    </div><!--/.row-->
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $logs->render() !!}
            </div>
        </div>
    </div>
@endsection