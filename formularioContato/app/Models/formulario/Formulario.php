<?php

namespace App\Models\formulario;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
	protected $fillable = [
		'nome',
		'email',
		'telefone',
		'mensagem',
		'ip',
		'arquivo'];   
}
