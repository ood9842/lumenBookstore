<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supply_details extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public $incrementing=false;

//relation
    public function supply_log()
    {
        return $this->belongsTo('App\Models\Supply_logs');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Books');
    }

}
