<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpResistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_resisters', function (Blueprint $table) {
            $table->bigIncrements('id',8);
            $table->string('username',20);
            $table->string('kana_name',50);
            $table->string('password')->unique();
            $table->string('email',50)->unique();
            $table->integer('phone_number')->unique();
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
        Schema::dropIfExists('emp_resisters');
    }
}
