<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NFEntrada extends Model
{

    public $table = 'nfentrada';

	protected $fillable = [
        'nfe',
        'serie_nfe',
        'data_emissao',
        'id_parceiro'
    ];

    public function produto() {

    	return $this->belongsTo(Produto::class);
    	
    }

    public function itensNfEntradas()
    {
        return $this->hasMany(ItensNfEntradas::class,'id_nf_entrada');
    }
}
