<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Franqueado extends Model
{
    protected $table= 'franqueados';
    protected  $fillable = [
        'estado_id',
        'cidade_id',
        'cnpj',
        'endereco',
        'end_correspondencia',
        'telefone',
        'celular',
        'email_particular',
        'whatsapp',
        'skype',
        'nascimento',
        'user_id',
        'tipo_id',

    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function cidade(){
        return $this->hasOne(Cidade::class);
    }

    public function estado(){
        return $this->hasOne(Estado::class);
    }
}
