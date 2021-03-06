<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
	        $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
	        $table->integer('role')->default(0);
            $table->rememberToken();
	        $table->softDeletes();
	        $table->unsignedInteger('token_limit')->default(10);
	        $table->unsignedInteger('templates_limit')->default(10);
	        $table->unsignedInteger('sent_limit_month')->default(300);
	        $table->unsignedInteger('sent_limit_today')->default(100);
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
        Schema::drop('users');
    }
}
