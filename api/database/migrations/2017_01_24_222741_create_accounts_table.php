<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer('site_ref');
            $table->string('site_user');
            $table->string('site_pass');
            $table->integer('user_inserter');
            $table->integer('user_tester')->nullable();
            $table->boolean('banned');
            $table->boolean('granted');
            $table->timestamps();

            $table->primary(['site_ref', 'site_user']);
            $table->foreign('site_ref')->references('id')->on('sites');
            $table->foreign('user_inserter')->references('id')->on('users');
            $table->foreign('user_tester')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
