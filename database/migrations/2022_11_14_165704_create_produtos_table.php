<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(); 
            $table->decimal('preco_custo', 19, 2)->nullable();
            $table->decimal('preco_venda', 19, 2)->nullable();
            $table->string('unidade')->nullable(); 
            $table->string('quantidade')->nullable();

            $table->string('quant_max')->nullable();
            $table->string('quant_min')->nullable();
            $table->string('referencia')->nullable();
            $table->string('marca')->nullable();
            $table->string('grupo')->nullable();
            $table->string('fornecedor')->nullable();
            $table->string('porcentagem')->nullable();
            $table->string('imp_federal')->nullable();
            $table->string('icms')->nullable();
            $table->string('lucro')->nullable();

            $table->string('codigo')->nullable();
            $table->string('nsc')->nullable();
            $table->string('categoria')->nullable();
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
        Schema::dropIfExists('produtos');
    }
};
