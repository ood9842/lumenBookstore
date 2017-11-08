<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'staffs';
    public $timestamps = false;
    protected $primaryKey='S_id';
    public $incrementing=false;

//relation
    public function person()
    {
        return $this->belongsTo('App\Models\Persons');
    }

    public function manager()
    {
          return $this->hasOne('App\Models\Managers');
    }

    public function employee()
    {
          return $this->hasOne('App\Models\Employees');
    }

    public function stock_keeper()
    {
          return $this->hasOne('App\Models\Stock_keepers');
    }
}
