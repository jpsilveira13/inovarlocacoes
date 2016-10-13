<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = "arquivos";

    protected $fillable = [
        'url',
        'descricao',
        'extensao',
        'categoria',
    ];
}
