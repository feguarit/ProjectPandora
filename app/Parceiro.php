<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
	public $table = 'parceiros';
    protected $fillable = ['cnpj','nome','endereco','telefone','email'];
}
