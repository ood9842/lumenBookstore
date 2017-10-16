<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='P_id';
    public $incrementing=false;

//relation
    public function customer()
    {
        return $this->hasOne('App\Customers');
    }

    public function staff()
    {
        return $this->hasOne('App\Staffs');
    }
}
