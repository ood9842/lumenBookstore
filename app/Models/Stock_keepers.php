<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock_keepers extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'stock_keepers';
    public $incrementing=false;

//relation
    public function staff()
    {
        return $this->belongsTo('App\Models\Staffs');
    }

    public function take_care()
    {
        return $this->belongsTo('App\Models\Stocks');
    }
}
