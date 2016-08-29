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
}