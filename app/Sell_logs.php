<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell_logs extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='Sell_logs_id';
    public $incrementing=false;

//relation
    public function bought()
    {
        return $this->belongsTo('App\Customers');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stocks');
    }

    public function details()
    {
        return $this->hasMany('App\Sell_details');
    }
}
