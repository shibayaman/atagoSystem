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
            $table->bigIncrements('emp_id',8);
            $table->string('emp_name',50);
            $table->string('emp_kana_name',50);
            $table->string('user_name',50)->unique();
            $table->string('password',20)->unique();
            $table->string('mail_address',50)->unique();
            $table->integer('phone_number')->unique();
            $table->string('title',20)->nullable();
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
