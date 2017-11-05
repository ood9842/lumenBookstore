<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_lines extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='Product_line_id';
    public $incrementing=false;

//relation
    public function published()
    {
        return $this->belongsTo('App\Publishers');
    }

    public function supply()
    {
        return $this->hasMany('App\Supply_logs');
    }
}
