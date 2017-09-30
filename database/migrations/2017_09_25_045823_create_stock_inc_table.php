<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockIncTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stock_id')->index();
            $table->integer('year')->index();
            $table->decimal('interest_income-bank', 15, 3);
            $table->decimal('total_interest_expense', 15, 3);
            $table->decimal('net_interest_income', 15, 3);
            $table->decimal('loan_loss_provision', 15, 3);
            $table->decimal('net_interest_income_after_loan_loss_provision', 15, 3);
            $table->decimal('non_interest_income', 15, 3);
            $table->decimal('non_interest_expense', 15, 3);
            $table->decimal('net_income_before_taxes', 15, 3);
            $table->decimal('provision_for_income_taxes', 15, 3);
            $table->decimal('net_income_after_taxes', 15, 3);
            $table->decimal('minority_interest', 15, 3);
            $table->decimal('net_income_before_extraordinary_items', 15, 3);
            $table->decimal('net_income', 15, 3);
            $table->decimal('total_adjustments_to_net_income', 15, 3);
            $table->decimal('income_available_to_common_excluding_extraordinary_items', 15, 3);
            $table->decimal('income_available_to_common_including_extraordinary_items', 15, 3);
            $table->decimal('diluted_net_income', 15, 3);
            $table->decimal('diluted_weighted_average_shares', 15, 3);
            $table->decimal('diluted_earnings_per_share', 15, 3);
            $table->decimal('dividends_per_share', 15, 3);
            $table->decimal('diluted_normalized_earnings_per_share', 15, 3);
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
        Schema::dropIfExists('stock_inc');
    }
}
