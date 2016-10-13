@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manuais</h1>
        </div>
    </div><!--/.row-->
    <div style="padding: 5px" class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered thumbnail-table">
                <thead>
                <tr>
                    <th style="width: 150px">Imagem</th>

                    <th>Descrição</th>

                    <th>Data</th>

                    <th>Informações</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($arquivos as $arquivo)
                    <tr>
                        <td class="valign-middle">
                            <div class="thumbnail">
                                <div class="thumbnail-view">
                                    <a class="fancybox fancybox.iframe" href="#">
                                        @if($arquivo->extensao == ".xls" || $arquivo->extensao == ".xlsx")
                                            <img src="{{url('img/icons/iconxls.png')}}" height="73" width="125" alt="{{$arquivo->descricao}}">
                                        @elseif($arquivo->extensao == ".pdf")
                                            <img src="{{url('img/icons/iconpdf.png')}}" height="73" width="125" alt="{{$arquivo->descricao}}">
                                        @elseif($arquivo->extensao == ".docx")
                                            <img src="{{url('img/icons/iconword.png')}}" height="73" width="125" alt="{{$arquivo->descricao}}">

                                        @elseif($arquivo->extensao == ".jpg")
                                            <img src="{{url('img/icons/iconjpg.png')}}" height="73" width="125" alt="{{$arquivo->descricao}}">
                                        @elseif($arquivo->extensao == ".rar")
                                            <img src="{{url('img/icons/iconrar.png')}}" height="73" width="125" alt="{{$arquivo->descricao}}">
                                        @else
                                            <img src="{{url('img/icons/iconcdr.png')}}" height="73" width="125" alt="{{$arquivo->descricao}}">
                                        @endif
                                    </a>
                                </div>
                            </div> <!-- /.thumbnail -->
                        </td>
                        <td class="valign-middle"><a class="fancybox fancybox.iframe" href="#" title="">{{$arquivo->descricao}}</a>
                            <p>{{$arquivo->descricao}}</p>
                        </td>
                        <td class="valign-middle">{{ date("d/m/Y", strtotime($arquivo->created_at)) }}</td>
                        <td class="file-info valign-middle">
                            <span><strong>Tamanho:</strong> 3 Mb</span> <br>
                            <span><strong>Formato:</strong>{{$arquivo->extensao}}</span> <br>
                            <!-- <span><strong>Dimensão:</strong> 120 x 120</span> -->
                        </td>
                        <td class="valign-middle"><a target="_blank" class="fancybox fancybox.iframe btn btn-primary" href="{{url('/arquivos')}}/{{$arquivo->url}}{{$arquivo->extensao}}">Download</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $arquivos->render() !!}
            </div>
        </div>
    </div>
@endsection