<?php

namespace inovarlocacoes\Http\Controllers;

use inovarlocacoes\CategoriaEquipamento;
use inovarlocacoes\Equipamento;
use inovarlocacoes\EquipamentoSubcategoria;
use inovarlocacoes\Http\Requests;

class EquipController extends Controller
{
    private $equips;
    private $equipCategoria;
    private  $equipSubcategoria;


    public function __construct(EquipamentoSubcategoria $equipSubcategoria, Equipamento $equips,CategoriaEquipamento $equipCategoria){
        $this->equips = $equips;
        $this->equipCategoria = $equipCategoria;
        $this->equipSubcategoria = $equipSubcategoria;
    }

    public function index(){

        return view('site.principal');
    }

    public function equipInterno($url_categoria,$url_nome){


       //aqui pego o id da categoria
        $idCategoria = $this->equipCategoria->where('url_nome',$url_categoria)->first()->id;
        // 1dd($idCategoria);

        //esse equips pega as categorias pra fazer a listagem no select
        if($idCategoria == 1){
            $equipsCategs = $this->equips->where('categoria_id',$idCategoria)->get();
            $equipamento = $this->equips->where('url_site',$url_nome)->first();
            $idEquips = $equipamento->id;

            $equipsTres = $this->equipSubcategoria->where('equipamento_id',$idEquips)->where('metragem',3)->get();
            $equipsSeis = $this->equipSubcategoria->where('equipamento_id',$idEquips)->where('metragem',6)->get();
            $equipsDoze = $this->equipSubcategoria->where('equipamento_id',$idEquips)->where('metragem',12)->get();

            return view('site.equipamento',compact('equipamento','equipsCategs','equipsSubcategoria','equipsTres','equipsSeis','equipsDoze'));
        }else{
            return view('errors.503');
        }

    }


}
