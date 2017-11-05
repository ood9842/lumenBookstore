<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='Store_id';
    public $incrementing=false;

//relation
    public function employ()
    {
        return $this->hasMany('App\Employees');
    }

    public function manager()
    {
        return $this->belongsTo('App\Managers');
    }

    public function members()
    {
        return $this->belongsTo('App\Customers');
    }

    public function stock()
    {
        return $this->hasOne('App\Stocks');
    }
}
