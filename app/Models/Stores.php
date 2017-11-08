<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'stores';
    protected $primaryKey='Store_id';
    public $timestamps = false;
    public $incrementing=false;

//relation
    public function employ()
    {
        return $this->hasMany('App\Models\Employees');
    }

    public function manager()
    {
        return $this->belongsTo('App\Models\Managers');
    }

    public function members()
    {
        return $this->hasMany('App\Models\Customers');
    }

    public function stock()
    {
        return $this->hasOne('App\Models\Stocks');
    }
}
