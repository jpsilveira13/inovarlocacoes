<?php

namespace inovarlocacoes\Http\Controllers;

use inovarlocacoes\CategoriaEquipamento;
use inovarlocacoes\Equipamento;
use inovarlocacoes\Http\Requests;

class EquipController extends Controller
{
    private $equips;
    private $equipCategoria;


    public function __construct(Equipamento $equips,CategoriaEquipamento $equipCategoria){
        $this->equips = $equips;
        $this->equipCategoria = $equipCategoria;
    }

    public function index(){
        $containers = $this->equips->where('categoria_id',1)->take(4)->get();
        $maquinas = $this->equips->where('categoria_id',2)->take(4)->get();
        $ferramentas = $this->equips->where('categoria_id',3)->take(4)->get();

        return view('site.principal',compact('containers','maquinas','ferramentas'));
    }

    public function equipInterno($url_categoria,$url_nome){
        $url_categoria = $this->equipCategoria->where('url_nome',$url_categoria)->first()->id;
        $equipamento = $this->equips->where('url_site',$url_nome)->where('categoria_id',$url_categoria)->first();

        return view('site.equipamento',compact('equipamento'));
    }


}
