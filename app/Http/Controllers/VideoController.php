<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\Noticia;
use inovarlocacoes\Video;

class VideoController extends Controller
{
    private $video;

    public function __construct(Video $video){
        $this->video = $video;
    }


}

