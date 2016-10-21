@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vídeo Aulas</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="section-photos-videos">
            @foreach($videos as $video)
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="mb35 video embed-responsive embed-responsive-4by3 video-bg">
                        <iframe class="embed-responsive-item" src="{{$video->link}}" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-12">
            <div class="text-center">
                {{$videos->render()}}
            </div>
        </div>
    </div>
@endsection