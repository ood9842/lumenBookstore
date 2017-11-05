<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_keepers extends Model
{
    /**
     * Get the phone record associated with the user.
     */

    public $incrementing=false;

//relation
    public function staff()
    {
        return $this->belongsTo('App\Staffs');
    }

    public function take_care()
    {
        return $this->belongsTo('App\Stocks');
    }
}
