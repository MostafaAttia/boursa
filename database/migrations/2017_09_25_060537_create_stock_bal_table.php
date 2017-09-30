<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockBalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // contains ref. to balance pdf

        Schema::create('stock_balances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stock_id')->index();
            $table->integer('year')->index();
            $table->string('first_quart');
            $table->string('half_quart');
            $table->string('third_quart');
            $table->string('yearly');
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
        Schema::dropIfExists('stock_bal');
    }
}
