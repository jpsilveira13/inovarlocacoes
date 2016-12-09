<?php

namespace inovarlocacoes\Http\Controllers;

use inovarlocacoes\CategoriaEquipamento;
use inovarlocacoes\ContainerSubcategoria;
use inovarlocacoes\Equipamento;

use inovarlocacoes\EquipamentoSubcategoria;
use inovarlocacoes\Http\Requests;

class EquipController extends Controller
{
    private $equips;
    private $equipCategoria;
    private  $containerSubcategoria;
    private $equipSub;


    public function __construct(EquipamentoSubcategoria $equipSub, ContainerSubcategoria $containerSubcategoria, Equipamento $equips,CategoriaEquipamento $equipCategoria){
        $this->equips = $equips;
        $this->equipCategoria = $equipCategoria;
        $this->containerSubcategoria = $containerSubcategoria;
        $this->equipSub = $equipSub;
    }

    public function index(){

        return view('site.principal');
    }

    public function equipInterno($url_categoria,$url_nome){


       //aqui pego o id da categoria
        $idCategoria = $this->equipCategoria->where('url_nome',$url_categoria)->first()->id;
        // 1dd($idCategoria);
        $equipsCategs = $this->equips->where('categoria_id',$idCategoria)->get();
        $equipamento = $this->equips->where('url_site',$url_nome)->first();
        $idEquips = $equipamento->id;
        //esse equips pega as categorias pra fazer a listagem no select
        if($idCategoria == 1){


            $equipsTres = $this->containerSubcategoria->where('equipamento_id',$idEquips)->where('metragem',3)->get();
            $equipsSeis = $this->containerSubcategoria->where('equipamento_id',$idEquips)->where('metragem',6)->get();
            $equipsDoze = $this->containerSubcategoria->where('equipamento_id',$idEquips)->where('metragem',12)->get();

            return view('site.equipamento',compact('equipamento','equipsCategs','equipsSubcategoria','equipsTres','equipsSeis','equipsDoze'));
        }elseif ($idCategoria == 3){
                $equipFerramentas = $this->equipSub->where('equipamento_id',$idEquips)->get();
           // dd($equipFerramentas);
            return view('site.ferramenta_equipamento',compact('equipamento','equipFerramentas','equipsCategs'));
        }elseif ($idCategoria == 2){
            $equipFerramentas = $this->equipSub->where('equipamento_id',$idEquips)->get();
            // dd($equipFerramentas);
            return view('site.ferramenta_equipamento',compact('equipamento','equipFerramentas','equipsCategs'));
        } else{
            return view('errors.503');
        }

    }


}
