<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranqueadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franqueados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnpj',50);
            $table->string('endereco',250);
            $table->string('end_correspondencia',250);
            $table->string('telefone',50);
            $table->string('celular',75);
            $table->string('email_particular',200);
            $table->string('whatsapp',100);
            $table->string('skype',100);
            $table->string('nascimento',30);
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidade');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo_franquia');
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
        Schema::drop('franqueados');
    }
}
