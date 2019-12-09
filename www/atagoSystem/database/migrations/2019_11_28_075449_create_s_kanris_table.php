<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKanrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_kanris', function (Blueprint $table) {
            $table->increments('ITEM_NUMBER', 10)->unique()->unsigned();
            $table->string('ITEM_NAME',100);
            $table->string('ITEM_URL',200)->nullable();
            $table->integer('ITEM_PRICE',10)->unsigned();
            $table->integer('CATEGORY_NUMBER',10)->unsigned();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_kanris');
    }
}
