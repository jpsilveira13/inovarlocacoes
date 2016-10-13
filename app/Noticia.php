<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "noticias";

    protected $fillable = [
        'titulo',
        'descricao',
        'visitas',
        'ativo',
        'url_image',
        'url_site',

    ];
}
