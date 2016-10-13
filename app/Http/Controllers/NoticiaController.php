<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\Noticia;

class NoticiaController extends Controller
{
    private $noticia;

    public function __construct(Noticia $noticia){
        $this->noticia = $noticia;
    }


    public function getNoticia($url_noticia){
        $noticia = $this->noticia->where('url_site',$url_noticia)->first();
        dd($noticia);
    }

}

