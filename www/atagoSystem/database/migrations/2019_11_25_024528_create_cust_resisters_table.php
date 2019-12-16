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
            $table->bigIncrements('cust_id',8);
            $table->string('cust_name',20);
            $table->string('cust_kana_name',20);
            $table->string('password',20)->unique();
            $table->string('mail_address')->unique();
            $table->string('mail_address2')->unique()->nullable();
            $table->integer('address_number');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->integer('phone_number')->unique();
            $table->integer('urgent_phone_number')->unique()->nullable();
            $table->boolean('atagon_flg')->default(false);
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
