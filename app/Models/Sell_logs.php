<?php

namespace App\Models;

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
        return $this->belongsTo('App\Models\Customers');
    }

    public function stock()
    {
        return $this->belongsTo('App\Models\Stocks');
    }

    public function details()
    {
        return $this->hasMany('App\Models\Sell_details');
    }
}
