<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    protected $fillable = [
      'uf'
    ];

    public function franqueaestado(){
        return $this->hasMany(Franqueado::class);
    }
}
