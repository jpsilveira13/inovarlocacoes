<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Franqueado;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\Log;
use inovarlocacoes\Noticia;
use inovarlocacoes\User;
use inovarlocacoes\Video;

class AdminController extends Controller
{
    private $noticia;
    private $video;
    private $usuario;
    private $franqueado;
    private $log;

    public function __construct(Franqueado $franqueado,Noticia $noticia,Video $video, User $usuario,Log $eventos){
        $this->noticia = $noticia;
        $this->video = $video;
        $this->usuario = $usuario;
        $this->franqueado = $franqueado;
        $this->log = $eventos;
    }

    public function index(){
        $noticias = $this->noticia->orderBy('created_at','desc')->take(3)->get();
        return view('admin.principal',compact('noticias'));
    }

    public function videoAula(){
        $videos = $this->video->paginate(6);
        return view('admin.video',compact('videos'));
    }
    public function manual(){
        return view('admin.manual');
    }

    public function totalUsuario(){
        $franqueados = $this->franqueado->orderBy('id','desc')->with('user','cidade')->paginate(12);

        return view('admin.usuario.index',compact('franqueados'));
    }

    public function logEventosUsuario($id){
        $logs = $this->log->where('users_id',$id)->orderBy('id','desc')->paginate(22);
   
        return view('admin.log.loguserinterno',compact('logs'));
    }
}
