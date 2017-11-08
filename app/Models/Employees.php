<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'employees';
    public $incrementing=false;
    public $timestamps = false;

//relation
    public function staff()
    {
        return $this->belongsTo('App\Models\Staffs','Staff_id','staff_id');
    }

    public function work_on()
    {
          return $this->belongsTo('App\Models\Stores','Store_id','store_workON');
    }


}
