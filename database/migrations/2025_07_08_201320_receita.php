<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //protected $connection = 'pgsql';

    public function up(): void
    {
        //Schema::connection('sqlite')->create('receitas', function (Blueprint $table){
        Schema::create('receitas', function (Blueprint $table){
            $table->id();
            $table->string('NOME');
            //$table->string('tipo_receita');
            $table->string('VALOR');
            $table->date('DATA');
            $table->timestamps();
        }
        );
    /* CREATE TABLE RECEITAS(
    ID_RECIBO int PRIMARY KEY AUTO_INCREMENT,
    NOME_RECIBO VARCHAR(255) NOT NULL,
    TIPO_RECEITA array()??
    VALOR_RECIBO VARCHAR(255) NOT NULL,
    DATA_RECIBO datetime(dd/mm/aaaa)?? NOT NULL
    ) */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receitas');
    }
};
