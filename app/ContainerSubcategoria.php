<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class ContainerSubcategoria extends Model
{
    protected  $table = "container_subcategoria";

    protected  $fillable = [
        'nome',
        'modelo',
        'eletrica',
        'revestido',
        'banheiro',
        'entrada_ar',
        'janela',
        'porta',
        'especial',
        'metragem',
        'equipamento_id',

    ];

    public function equipamento(){
        return $this->belongsTo(Equipamento::class);
    }

}
