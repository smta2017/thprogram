<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('itemname_id');
            $table->string('descrip');
            $table->integer('qut');
            $table->string('sdescrip');
            $table->unsignedInteger('purchasemaster_id');
            $table->float('sprice',8,2);
            $table->unsignedInteger('store_id');

            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('itemname_id')->references('id')->on('itemnames');
            $table->foreign('purchasemaster_id')->references('id')->on('purchasemasters');
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
        Schema::dropIfExists('items');
    }
}
