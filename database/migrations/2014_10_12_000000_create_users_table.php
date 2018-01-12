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
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('nickname', 100);
            $table->string('email')->unique();
            $table->string('password', 250);
            $table->enum('estado',['activado','desactivado']);
            $table->enum('tipo',['usuario','moderador','admin']);
            $table->string('fc', 250)->nullable();;
            $table->string('avatar', 250);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
