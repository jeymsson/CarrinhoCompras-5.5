<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	use Notifiable;
    //
	protected $table = 'cad_pedido';
	public	  $timestamps = true;
	protected $fillable = ['id', 'user_id', 'status' ];
	protected $hidde 	= [''];
}
