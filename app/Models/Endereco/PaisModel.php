<?php

namespace App\Models\Endereco;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaisModel extends Model
{
    public function up()
    {
        Schema::create('pais',
        function(Blueprint $tabela) {
            $tabela->increments('identificador');
            $tabela->string('nome');
        }
        );
    }

    public function down()
    {
        Schema::dropIfExists('pais');
    }
}
