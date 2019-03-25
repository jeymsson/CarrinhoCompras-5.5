<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class CupomDesconto extends Model
{
	use Notifiable;
	//
	protected $table = 'cad_cupom_descontos';
	public	  $timestamps = true;
	protected $fillable = ['id', 'nome', 'localizador', 'desconto', 'modo_desconto', 'porc', 'limite', 'dthr_validade', 'ativo' ];
	protected $hidde 	= [''];
}
