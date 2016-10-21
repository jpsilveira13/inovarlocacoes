<?php

namespace inovarlocacoes;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
      'link'
    ];
}
