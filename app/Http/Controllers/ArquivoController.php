<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Arquivo;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;

class ArquivoController extends Controller
{
    private $arquivo;

    public function __construct(Arquivo $arquivo){
        $this->arquivo = $arquivo;
    }

    public function getArquivos(){
        $arquivos = $this->arquivo->paginate(12);

        return view('admin.manual',compact('arquivos'));
    }
}
