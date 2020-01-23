<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_purchase_history', function (Blueprint $table) {
            $table->bigincrements('ID');
            $table->bigInteger('ORDER_CODE');
            $table->bigInteger('ITEM_CODE');
            $table->unsignedInteger('QUANTITY');
            $table->unsignedInteger('TOTAL');
            $table->boolean('CANCEL_FLG')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_purchase_history');
    }
}
