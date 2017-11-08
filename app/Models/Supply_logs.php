<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supply_logs extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'supply_logs';
    protected $primaryKey='Slogs_id';
    public $incrementing=false;

//relation
    public function product_line()
    {
        return $this->belongsTo('App\Models\Product_lines');
    }

    public function stock()
    {
        return $this->belongsTo('App\Models\Stocks');
    }

    public function details()
    {
        return $this->hasMany('App\Models\Supply_details');
    }
}
