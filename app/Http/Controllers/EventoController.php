<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Franqueado;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;
use inovarlocacoes\Log;


class EventoController extends Controller
{

    private $log;

    public function __construct(Log $eventos){

        $this->log = $eventos;
    }

    public function index(){
        $logs = $this->log->orderBy('id','desc')->paginate(22);

        return view('admin.log.index',compact('logs'));
    }

}
