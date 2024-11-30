<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('produtos', function (Blueprint $table) {
            $table->id('idprodutos');
            $table->string('nome', 45);
            $table->string('preco', 45);
            $table->string('quantidade', 45);
            $table->unsignedBigInteger('categoria_id');

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('produtos');
    }
}
