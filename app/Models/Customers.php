<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'customers';
    protected $primaryKey='C_id';
    public $timestamps = false;
    public $incrementing=false;

//relation
    public function person()
    {
        return $this->belongsTo('App\Models\Persons');
    }


    public function membered()
    {
        return $this->belongsTo('App\Models\Stores');
    }

    public function buy()
    {
        return $this->hasMany('App\Models\Sell_logs');
    }
}
