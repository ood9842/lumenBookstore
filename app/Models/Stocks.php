<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'stocks';
    protected $primaryKey='Stock_id';
    public $incrementing=false;

//relation
    public function store()
    {
        return $this->belongsTo('App\Models\Stores');
    }

    public function take_care_by()
    {
        return $this->hasMany('App\Models\Stock_keepers');
    }

    public function sell()
    {
        return $this->hasMany('App\Models\Sell_logs');
    }

    public function supply()
    {
        return $this->hasMany('App\Models\Supply_logs');
    }

    public function stock()
    {
        return $this->hasMany('App\Models\Book_in_stock');
    }
}
