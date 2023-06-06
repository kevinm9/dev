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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formasdepago_id');
            $table->unsignedBigInteger('cliente_id');
            $table->decimal('total', 8, 2);
            $table->timestamps();
            $table->foreign('formasdepago_id')->references('id')->on('formasdepagos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
