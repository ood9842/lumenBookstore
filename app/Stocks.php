<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='Stock_id';
    public $incrementing=false;

//relation
    public function store()
    {
        return $this->belongsTo('App\Stores');
    }

    public function take_care_by()
    {
        return $this->hasMany('App\Stock_keepers');
    }

    public function sell()
    {
        return $this->hasMany('App\Sell_logs');
    }

    public function supply()
    {
        return $this->hasMany('App\Supply_logs');
    }

    public function stock()
    {
        return $this->hasMany('App\Book_in_stock');
    }
}
