@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de Arquivos</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="{{route('arquivos.store')}}" method="POST" enctype="multipart/form-data" class="form-group" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <div class="file-upload">
                                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adicionar Arquivo</button>

                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' name="arquivo"  onchange="readURL(this);" />
                                        <div class="drag-text">
                                            <h3>
                                                Arraste e solte um arquivo ou selecione</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <br />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Arquivo cadastrado</span></button>
                                        </div>
                                    </div>
                                    <br />
                                    <small class="text-center"><b>Obs: Não usar arquivo .exe</b></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Categoria *</label>
                                <select class="form-control" name="categoria">
                                    <option value="">Selecione uma opção</option>

                                    @foreach($categorias as $key => $categoria)
                                        <option value="{{$categoria['categoria']}}">{{$categoria['categoria']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Descrição *</label>
                                <textarea name="descricao" class="form-control" rows="6"></textarea>
                            </div>

                           <div class="text-center">
                               <button class="btn btn-lg btn-primary center-block">Salvar</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

@endsection