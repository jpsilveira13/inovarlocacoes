<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class CategoriaEquipamento extends Model
{
    protected $table = "categoria_equipamentos";
    protected $fillable = [
        'nome',
        'url_nome'

    ];

    public function equip(){
        return $this->hasMany(Equipamento::class);
    }
}
