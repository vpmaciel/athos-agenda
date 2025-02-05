<?php

namespace App\Models\Endereco;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CidadeModel extends Model
{
    public function up()
    {
        Schema::create('cidade',
        function(Blueprint $tabela) {
            $tabela->increments('identificador');
            $tabela->string('nome');
            $tabela->integer('pais')->unsigned();
            $tabela->foreign('pais')->references('identificador')->on('pais')->onDelete('cascade')->onUpdate('cascade');
        }
        );
    }

    public function down()
    {
        Schema::dropIfExists('cidade');
    }
}
