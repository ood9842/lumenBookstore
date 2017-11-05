<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell_details extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public $incrementing=false;

//relation
    public function sell_log()
    {
        return $this->belongsTo('App\Sell_logs');
    }

    public function book()
    {
        return $this->belongsTo('App\Books');
    }

}
