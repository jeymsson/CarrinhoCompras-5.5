<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	use Notifiable;
	public $timestamps = true;
	protected $table = 'cad_produto';
	protected $fillable = ['id', 'nome', 'nome_reduz', 'descricao', 'valor', 'imagem', 'ativo' ];
	protected $hidde 	= [''];
}
