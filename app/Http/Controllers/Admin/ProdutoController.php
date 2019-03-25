<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Produto;

class ProdutoController extends Controller
{
    //

    protected function adicionar(array $data = null)
    {
        // $r = new Produto(['nome' => 'P1', 'nome_reduz' => 'P11', 'descricao' => 'P111', 'valor' => '1', 'imagem' => ' ' ]);$r->save();dd($r->id);
        $save = new Produto([
			'nome' 		 => $data['nome'], 
			'nome_reduz' => $data['nome_reduz'], 
			'descricao'  => $data['descricao'], 
			'valor' 	 => $data['valor'], 
			'imagem' 	 => $data['imagem'], 
		]);
        $save->save();
        // dd($save);
        return $save;
    }
}
