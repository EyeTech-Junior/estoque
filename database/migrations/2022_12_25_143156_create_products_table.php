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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('code',25)->nullable();
            $table->decimal('cost',10,2)->default(0);
            $table->decimal('price',10,2)->default(0);
            $table->integer('stock');
            $table->integer('alerts')->nullable();
            $table->string('image',100)->nullable();
            $table->string('unity',25)->nullable();
            $table->string('company',25)->nullable();
            $table->string('group',25)->nullable();
            $table->string('provider',25)->nullable();
            $table->decimal('percentage',10,2)->nullable();
            $table->decimal('tax',10,2)->nullable();
            $table->decimal('icms',10,2)->nullable();
            $table->decimal('ncs',10,2)->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
};
