<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockDisclosureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_disclosures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stock_id')->index();
            $table->string('name');
            $table->string('relation');
            $table->string('company');
            $table->string('title');
            $table->string('security_buy_sell');
            $table->string('security_name');
            $table->string('relation_with_company');
            $table->string('trans_type');
            $table->string('quantity');
            $table->date('date');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_disclosure');
    }
}
