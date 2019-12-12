<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->char('genero',1);
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('registro')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('fecha_nac');
            $table->string('codigo')->nullable();
            $table->integer('tipo');//1=estudiantes ; 2=profesor
            $table->rememberToken();
            $table->timestamps();
            $table->bigInteger('role_id')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
