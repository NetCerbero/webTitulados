<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_laboral', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_empresa', 100)->nullable(false);
            $table->string('telefono', 20);
            $table->string('email', 254);
            // campos FK
            $table->unsignedBigInteger('area_cargo_id');
            $table->unsignedBigInteger('nivel_cargo_id');
            $table->unsignedBigInteger('regimen_id');
            $table->unsignedBigInteger('sector_id');
            // relaciones FK
            $table->foreign('area_cargo_id')->references('id')->on('area_cargo')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('nivel_cargo_id')->references('id')->on('nivel_cargo')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('regimen_id')->references('id')->on('regimen')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('sector_id')->references('id')->on('sector')
                ->onDelete('restrict')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_laboral');
    }
}
