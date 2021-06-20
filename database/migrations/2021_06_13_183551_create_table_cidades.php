<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcidades', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo'); //Chave primaria
            $table->timestamps();
            $table->string('nome');
            $table->string('estado'); //Chave estrangeira
            $table->foreign('estado')->references('sigla')->on('tbestados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcidades');
    }
}
