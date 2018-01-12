<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 150);
            $table->integer('categoria_id')->unsigned();
            $table->string('descripcion_corta', 200);
            $table->text('informacion');
            $table->string('imagen', 200);
            $table->enum('estado',['activado','desactivado']);
            $table->foreign('categoria_id')->references('id')->on('categorias') ->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
