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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',30)->index();
            $table->string('first_name',30)->index();
            $table->string('last_name',30)->index();
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('verified')->default(0);
            $table->boolean('is_cas')->default(0);
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
