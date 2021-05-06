<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fosters', function (Blueprint $table) {
            $table->id('foster_id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('animal_id')->unsigned();
            $table->date('fostered_at');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('animal_id')->references('animal_id')->on('animals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fosters');
        $table->dropForeign('fosters_user_id_foreign');
        $table->dropForeign('fosters_animal_id_foreign');
    }
}
