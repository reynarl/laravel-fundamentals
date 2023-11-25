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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);

            //relacionamos uno a uno la tabla users con profiles

            //creamos el campo que relacionará a la tabla usuarios con esta
            $table->unsignedBigInteger('user_id')->unique();
            //especificamos que 'user_id' es una llave foranea,
            $table->foreign('user_id')
                //con respecto al campo 'id'
                ->references('id')
                //en la tabla 'users'
                ->on('users')
                //si se elimina el registro (un usuario) también se elimina el perfil al que el id está referenciado (efecto en cascada)
                ->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
};
