<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'user_id',
        'nome',
        'motivo'
    ];
}
