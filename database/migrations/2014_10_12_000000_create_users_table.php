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
            $table->bigIncrements('id');
            $table->string('username')->unique()->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('mobile')->unique();
            $table->string('email')->unique()->nullable();
            $table->tinyInteger('type');
            $table->tinyInteger('source');
            $table->integer('credit_limit'); // 50000
            $table->integer('credit_score')->default(0); // 1
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
