<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jogos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_tecnica', function (Blueprint $table) {
            //PK
            $table->increments('id_jogo');

            $table->text('nome_jogo');
            $table->text('desenvolvedor');
            $table->text('plataformas');
            $table->text('lancamento');
            $table->text('genero');
            $table->text('modo_de_jogo');
            $table->text('classificacao');
            $table->text('descricao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_tecnica');
    }
}
