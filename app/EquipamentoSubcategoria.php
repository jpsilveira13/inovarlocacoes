<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class EquipamentoSubcategoria extends Model
{
    protected $table = "equipamento_subcategoria";

    protected $fillable = [
        'nome',
        'potencia',
        'peso',
        'caracteristica',
        'equipamento_id',
    ];
}
