<?php

namespace inovarlocacoes\Http\Controllers;

use Illuminate\Http\Request;

use inovarlocacoes\Equipamento;
use inovarlocacoes\Http\Requests;
use inovarlocacoes\Http\Controllers\Controller;

class EquipController extends Controller
{
    private $equips;

    public function __construct(Equipamento $equips){
        $this->equips = $equips;
    }

    public function index(){
        $containers = $this->equips->where('categoria_id',1)->take(4)->get();
        

        $maquinas = $this->equips->where('categoria_id',2)->take(4)->get();
        $ferramentas = $this->equips->where('categoria_id',3)->take(4)->get();

        return view('layout',compact('containers','maquinas','ferramentas'));
    }


}
