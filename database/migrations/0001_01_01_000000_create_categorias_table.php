<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('idcategorias'); 
            $table->string('nome', 45);
            $table->primary('idcategorias');
            $table->timestamps();
        });

        Schema::create('produtos', function (Blueprint $table) {
            $table->id('idprodutos'); 
            $table->string('nome', 45);
            $table->string('preco', 45);
            $table->string('quantidade', 45);
            $table->foreignId('categorias_idcategorias')->constrained('categorias'); 
            $table->primary('idprodutos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('produtos');
    }
}