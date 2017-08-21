<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->string('email', 50)->unique();
            $table->string('password', 20);
            $table->rememberToken();
            $table->string('phone', 20);
            $table->string('addressline1', 100);
            $table->string('addressline2', 100);
            $table->string('suburb', 30);
            $table->string('state', 20);
            $table->string('postcode', 10);
            $table->string('country', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
