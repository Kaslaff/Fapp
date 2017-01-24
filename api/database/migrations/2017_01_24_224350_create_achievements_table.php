<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->increments('id');   /* I think this is not necessary */
            $table->unsignedInteger('site_ref');
            $table->integer('exp')->default(0);
            $table->integer('inserts')->default(0);
            $table->integer('tests')->default(0);
            $table->integer('bans')->default(0);
            $table->integer('grants')->default(0);
            $table->timestamps();

            $table->foreign('site_ref')->references('id')->on('sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
