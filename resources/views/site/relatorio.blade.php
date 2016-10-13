@extends('layout')
@section('content')

    <div style="margin-top: 150px" class="row">
        <div class="container">
            <h1 class="text-center">Relatório Unidades</h1>
            <hr />
            <div class="col-md-12">
                <table class="table table-action table-hover table-responsive table-striped">
                    <thead>

                    <tr>
                        <th class="t-small">ID</th>

                        <th class="t-small">Unidade</th>

                        <th class="t-medium">Contador telefone</th>

                        <th class="t-medium">Contador hotsite</th>


                    </tr>

                    </thead>

                    <tbody id="busca-tipo">

                    @foreach($relatorios as $relatorio)

                        <tr>


                            <td class="vertical-middle">{{$relatorio->id}}</td>

                            <td>
                                {{$relatorio->cidade->nome}}
                            </td>
                            <td class="vertical-middle">
                                {{$relatorio->cont_tel}}
                            </td>

                            <td class="vertical-middle">
                                {{$relatorio->cont_hotsite}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
