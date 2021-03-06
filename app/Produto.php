<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['part_number','descricao','ncm','peso'];

    public function itensNfEntrada()
    {
    	return $this->belongsTo(ItensNfEntradas::class,'id');
    }
}

