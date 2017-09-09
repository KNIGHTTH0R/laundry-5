<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
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
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->rememberToken();
            $table->string('phone', 20)->nullable();
            $table->string('addressline1')->nullable();
            $table->string('addressline2')->nullable();
            $table->string('suburb', 30)->nullable();
            $table->string('state', 30)->nullable();
            $table->string('postcode', 20)->nullable();
            $table->string('country', 30)->nullable();
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
