<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = "equipamentos";
    protected  $fillable = [
        'nome',
        'codigo',
        'descricao',
        'preco',
        'ativo',
        'url_site',
        'url_imagem',
        'categoria_id',

    ];

    public function catequip(){
        return $this->belongsTo(CategoriaEquipamento::class,'categoria_id','id');

    }

    public function franqueado(){
        return $this->belongsToMany(Franqueado::class,'equipamento_franqueado');
    }

    public function containerSubcategoria(){
        return $this->belongsToMany(ContainerSubcategoria::class);
    }
}
