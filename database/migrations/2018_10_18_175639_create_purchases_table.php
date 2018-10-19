<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('itemname_id');
            $table->integer('qut');
            $table->float('pprice',8,2);
            $table->unsignedInteger('purchasemaster_id');

            $table->foreign('purchasemaster_id')->references('id')->on('purchasemasters');
            $table->foreign('itemname_id')->references('id')->on('itemnames');
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
        Schema::dropIfExists('purchases');
    }
}
