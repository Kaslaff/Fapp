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
        /* Should we add a email attribute? */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user', 50)->unique();
            $table->string('pass');
            $table->boolean('fm')->default(0);
            $table->integer('exp')->default(0);
            $table->integer('inserted')->default(0);
            $table->integer('tested')->default(0);
            $table->integer('banned')->default(0);
            $table->integer('granted')->default(0);
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
