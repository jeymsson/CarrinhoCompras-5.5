<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('nome_reduz');
            $table->text('descricao');
            $table->decimal('valor', 6, 2)->default(0);
            $table->string('imagem');
            $table->enum('ativo', ['S', 'N'])->default('S');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_produto');
    }
}
