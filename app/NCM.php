<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NCM extends Model
{
	public $table = 'ncms';
    protected $fillable = ['ncm','descricao','ii','ipi','pis','cofins'];
}
