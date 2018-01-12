<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Lookup', 100);
            $table->integer('Ndex');
            $table->string('Species', 100);
            $table->string('Forme', 100);
            $table->string('Type1', 100);
            $table->string('Type2', 100);
            $table->string('Ability1', 100);
            $table->string('Ability2', 100);
            $table->string('AbilityH', 100);
            $table->integer('HP');
            $table->integer('Attack');
            $table->integer('Defense');
            $table->integer('SpAttack');
            $table->integer('SpDefense');
            $table->integer('Speed');
            $table->integer('Total');
            $table->string('Weight',50)->nullable();
            $table->string('Height',50)->nullable();
            $table->text('Dex1')->nullable();
            $table->text('Dex2')->nullable();
            $table->string('Class', 250)->nullable();
            $table->float('Male', 8, 2)->nullable();
            $table->float('Female', 8, 2)->nullable();
            $table->string('PreEvolution', 120)->nullable();
            $table->string('EggGroup1', 120)->nullable();
            $table->string('EggGroup2', 120)->nullable();
            $table->string('TypeConcat', 120)->nullable();
            $table->string('AbilityConcat', 120)->nullable();
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
        Schema::dropIfExists('pokemon');
    }
}
