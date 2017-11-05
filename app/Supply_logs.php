<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply_logs extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='Slogs_id';
    public $incrementing=false;

//relation
    public function product_line()
    {
        return $this->belongsTo('App\Product_lines');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stocks');
    }

    public function details()
    {
        return $this->hasMany('App\Supply_details');
    }
}
