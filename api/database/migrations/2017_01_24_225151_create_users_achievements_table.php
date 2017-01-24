<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_achievements', function (Blueprint $table) {
            $table->integer('user_ref');
            $table->integer('site_ref');
            $table->timestamps();

            $table->primary(['user_ref', 'site_ref']);
            $table->foreign('site_ref')->references('id')->on('sites');
            $table->foreign('user_ref')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_achievements');
    }
}
