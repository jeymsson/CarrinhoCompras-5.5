<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
	use Notifiable;
    //
	protected $table = 'cad_pedido_produto';
	public	  $timestamps = true;
	protected $fillable = ['id', 'pedido_id', 'produto_id', 'valor', 'desconto', 'cupom_desconto', 'status' ];
	protected $hidde 	= [''];
}
