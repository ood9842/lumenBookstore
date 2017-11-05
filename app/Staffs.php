<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='S_id';
    public $incrementing=false;

//relation
    public function person()
    {
        return $this->belongsTo('App\Persons');
    }

    public function manager()
    {
          return $this->hasOne('App\Managers');
    }

    public function employee()
    {
          return $this->hasOne('App\Employees');
    }

    public function stock_keeper()
    {
          return $this->hasOne('App\Stock_keepers');
    }
}
