<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='C_id';
    public $incrementing=false;

//relation
    public function person()
    {
        return $this->belongsTo('App\Persons', 'P_id');
    }

    /*public function member()
    {
        return $this->hasOne('App\Staffs');
    }*/
}
