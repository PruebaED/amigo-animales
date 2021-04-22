<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('user_id');
            $table->string('name', 255);
            $table->string('surnames', 255);
            $table->string('email', 320)->unique();
            $table->string('password', 255);
            $table->string('phone', 255);
            $table->bigInteger('province_id')->unsigned();
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
        Schema::dropIfExists('users');
        $table->dropForeign('users_province_id_foreign');
    }
}
