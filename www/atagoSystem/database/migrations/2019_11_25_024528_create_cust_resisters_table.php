<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustResistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_resisters', function (Blueprint $table) {
            $table->bigIncrements('id',8);
            $table->string('username',20);
            $table->string('kana_name',20);
            $table->string('password')->unique();
            $table->string('email')->unique();
            $table->string('email2')->unique()->nullable();
            $table->integer('address_number');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('phone_number')->unique();
            $table->string('urgent_phone_number')->unique()->nullable();
            $table->boolean('atagon_flg')->default(false);
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
        Schema::dropIfExists('cust_resisters');
    }
}
