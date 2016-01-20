<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensNfEntradas extends Model
{
    public $table = 'itensnfentradas';

    public function nfEntrada()
    {
    	return $this->belongsTo(NFEntrada::class,'id_nf_entrada');
    }

    public function produto()
    {
    	return $this->hasOne(Produto::class,'id');	
    }
}
