<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHistoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_history_details', function (Blueprint $table) {
            $table->bigincrements('ID');
            $table->bigInteger('ORDER_CODE');
            $table->unsignedInteger('ORDER_TOTAL');
            $table->unsignedInteger('PAYID');
            $table->date('ORDERDATE');
            $table->string('SHIPPADD');
            $table->boolean('PAYSTATUS')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_history_details');
    }
}
