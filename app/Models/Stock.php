<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Stock extends Model
{
    use SoftDeletes;
    use Searchable;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array $dates
     */
    public $dates = ['deleted_at'];


    /**
     * The balance files associated with the Stock.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balance()
    {
        return $this->hasMany(\App\Models\StockBalance::class);
    }

    /**
     * The Stock's Income-Statement.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function income()
    {
        return $this->hasMany(\App\Models\StockIncome::class);
    }

    /**
     * The Stock's Disclosure.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disclosure()
    {
        return $this->hasMany(\App\Models\StockDisclosure::class);
    }

    /**
     * get website url
     */
    public function getWebsiteURLAttribute()
    {
        return 'http://www.' . $this->website;
    }


}
