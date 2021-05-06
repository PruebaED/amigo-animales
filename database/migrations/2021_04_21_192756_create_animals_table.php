<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id('animal_id');
            $table->string('name', 255);
            $table->integer('age');
            $table->enum('gender', ['Macho', 'Hembra']);
            $table->string('breed', 255);
            $table->float('weight', 5, 2);
            $table->date('date');
            $table->string('image', 255);
            $table->enum('state', ['en acogida', 'en adopcion', 'urgente', 'desaparecido', 'acogido', 'adoptado']);
            $table->string('description', 750);
            $table->boolean('vaccinated');
            $table->boolean('healthy');
            $table->boolean('sterilize');
            $table->boolean('castrated');
            $table->boolean('dewormed');
            $table->boolean('microchip');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('province_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('province_id')->references('province_id')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
        $table->dropForeign('animals_user_id_foreign');
        $table->dropForeign('animals_province_id_foreign');
    }
}
