<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('nota_final')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->bigInteger('final_id')->nullable();
            $table->bigInteger('grado_id')->nullable();
            $table->bigInteger('directo_id')->nullable();
            $table->char('tipo',1);
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
        Schema::dropIfExists('examens');
    }
}
