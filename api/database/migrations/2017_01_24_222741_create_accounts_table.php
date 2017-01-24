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
            $table->unsignedInteger('site_ref');
            $table->string('site_user', 50);
            $table->string('site_pass');
            $table->unsignedInteger('user_inserter');
            $table->unsignedInteger('user_tester')->nullable();
            $table->boolean('banned')->default(0);
            $table->boolean('granted')->default(0);
            
            /* timestamps */
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

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
