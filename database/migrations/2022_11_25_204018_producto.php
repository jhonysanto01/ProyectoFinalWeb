<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->string('precio_producto');
            $table->string('stock_producto');
/*             $table->unsignedBigInteger('id_categoria')->nullable()->after('stock_producto');
                $table->foreign('id_categoria')->references('id')->on('categoria'); */
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
