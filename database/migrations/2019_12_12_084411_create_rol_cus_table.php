<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolCusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_cus', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->bigInteger('rol_id');
            $table->bigInteger('cu_id');
            $table->char('leer',1);
            $table->char('escribir',1);
            $table->char('eliminar',1);
            $table->char('editar',1);
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
        Schema::dropIfExists('rol_cus');
    }
}
