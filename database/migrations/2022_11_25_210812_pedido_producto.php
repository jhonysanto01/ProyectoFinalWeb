<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedido_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pedido')->nullable();
            $table->foreign('id_pedido')
                ->references('id')
                ->on('pedido');

            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto')
                ->references('id')
                ->on('producto');

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
        //
    }
}
