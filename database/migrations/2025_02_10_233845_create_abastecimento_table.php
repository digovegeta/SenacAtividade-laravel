<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('renavam');
            $table->string('marca');
            $table->string('modelo');
            $table->string('ano_fabricacao');
            $table->timestamps();
        });
        Schema::create('abastecimento', function (Blueprint $table) {
            $table->id();
            $table->integer('veiculo_id');
            $table->date('data_abastecimento');
            $table->float('quantidade_litros');
            $table->float('preco_unitario');
            $table->string('tipo_combustivel');
            $table->integer('km');
            $table->foreign('veiculo_id')->references('id')->on('veiculo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abastecimento');
        Schema::dropIfExists('veiculo');
    }
};
