<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class MensagemFranqueado extends Model
{
    protected  $table = "mensagem_franqueado";
    protected $fillable = [
        'email_franqueado',
        'nome_franqueado',
        'nome',
        'email',
        'telefone',
        'conheceu',
        'mensagem',

    ];
}
