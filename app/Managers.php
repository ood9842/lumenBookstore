<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    /**
     * Get the phone record associated with the user.
     */

    public $incrementing=false;

//relation
    public function staff()
    {
        return $this->belongsTo('App\Staffs');
    }

    public function manage()
    {
        return $this->belongsTo('App\Stores');
    }
}
