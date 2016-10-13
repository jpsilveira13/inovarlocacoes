<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'titulo',
        'descricao',
        'visitas',
        'ativa',
        'url_image',
        'url_site'
    ];
}
