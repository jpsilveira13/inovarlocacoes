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

        return view('site.principal');
    }

    public function equipInterno($url_categoria,$url_nome){
        $url_categoria = $this->equipCategoria->where('url_nome',$url_categoria)->first()->id;
        $equipsCategs = $this->equips->where('categoria_id',$url_categoria)->get();

        $equipamento = $this->equips->where('url_site',$url_nome)->where('categoria_id',$url_categoria)->first();

        return view('site.equipamento',compact('equipamento','equipsCategs'));
    }


}
