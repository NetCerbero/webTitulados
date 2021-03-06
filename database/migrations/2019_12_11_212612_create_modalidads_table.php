<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('anio')->nullable();
            $table->integer('semestre')->nullable();
            $table->integer('anio_postulacion')->nullable();
            //trabajo final,tesis
            $table->date('presentacion')->nullable();
            $table->date('conclusion')->nullable();
            $table->string('titulo')->nullable();
            $table->bigInteger('area_id')->nullable();
            $table->bigInteger('guia_id')->nullable();
            //examen grado - sin titulo

            //graduacion directa
            $table->integer('forma')->nullable();

            // externos
            $table->integer('anio_titulacion')->nullable();

             // diferenciador
            $table->char('tipo',1);
            // 1 = tesis | 2 = examen grado | 3 = graduación directa | 4 = externo
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidads');
    }
}
