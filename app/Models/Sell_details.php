<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell_details extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'sell_details';
    public $incrementing=false;

//relation
    public function sell_log()
    {
        return $this->belongsTo('App\Models\Sell_logs');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Books');
    }

}
