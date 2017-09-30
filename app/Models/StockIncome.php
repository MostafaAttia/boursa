<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockIncome extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array $dates
     */
    public $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'stock_id', 'year' ,'deleted_at', 'created_at', 'updated_at'
    ];

    /**
     * The Stock associated with the StockIncome.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stock()
    {
        return $this->belongsTo(\App\Models\Stock::class);
    }

    /**
     * Get the Net Interest Inc. After Loan Loss Prov.
     *
     * @return integer
     */
    public function getNetInterestAfterLoanAttribute()
    {
        // netInterestAfterLoan = net_interest_income - loan_loss_prov

        return $this->net_interest_income - $this->loan_loss_prov;
    }

}
