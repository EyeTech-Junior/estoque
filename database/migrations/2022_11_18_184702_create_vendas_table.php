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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->decimal('valor_parcial', 19, 2);
            $table->decimal('valor_total', 19, 2);
            $table->decimal('desconto', 19, 2);
            $table->string('cpf');
            $table->string('cnpj');
            $table->string('pagamento');
            $table->string('inscricao_estadual');
            $table->string('endereco');
            $table->string('icms');
            $table->string('ipi');
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
        Schema::dropIfExists('vendas');
    }
};
