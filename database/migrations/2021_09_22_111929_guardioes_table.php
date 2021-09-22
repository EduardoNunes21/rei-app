<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GuardioesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardioes', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->date("dataNascimento");
            $table->string("cargo");
            $table->boolean("estagio");



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
