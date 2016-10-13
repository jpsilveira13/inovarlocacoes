<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\Noticia;

class AdminController extends Controller
{
    private $noticia;
    public function __construct(Noticia $noticia){
        $this->noticia = $noticia;
    }

    public function index(){
        $noticias = $this->noticia->orderBy('created_at','desc')->take(3)->get();
        return view('admin.principal',compact('noticias'));
    }

    public function videoAula(){
        return view('admin.video');
    }
    public function manual(){
        return view('admin.manual');
    }
}
