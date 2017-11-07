<?php

namespace App\Models;

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
        return $this->belongsTo('App\Models\Staffs');
    }

    public function manage()
    {
        return $this->belongsTo('App\Models\Stores');
    }
}