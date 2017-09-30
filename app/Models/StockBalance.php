<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockBalance extends Model
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
     * The Stock associated with the StockBalance.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stock()
    {
        return $this->belongsTo(\App\Models\Stock::class);
    }

}
