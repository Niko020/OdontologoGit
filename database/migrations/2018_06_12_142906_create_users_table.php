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
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
         
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('user_roles')->unsigned()->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function( $table){
            $table->foreign('user_roles')->references('id')->on('roles')->onDelete('cascade');
        });
        Schema::create('usersDatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni')->unique();
            $table->string('direccion');
            $table->date('fechaDeNacimiento');
            $table->string('obraSocial');
            $table->integer('numeroObraSocial');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
         Schema::table('usersDatos', function( $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('usersDatos');
        
    }
}