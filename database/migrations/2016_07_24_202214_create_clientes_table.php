<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('fantasia');
            $table->string('forma_de_visita', 20);
            $table->string('plano', 100);
            $table->decimal('valor_base', 15, 4);
            $table->decimal('comissao', 15, 4);
            $table->string('situacao');
            $table->string('tipo_cliente', 20);            
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
        Schema::drop('clientes');
    }
}
