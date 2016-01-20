<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    protected $table = 'itens_entrada';
    protected $fillable = [];

    public function itensNfEntrada()
    {
    	return $this->belongsTo(App\ItensNfEntradas::class);
    }
}
