<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_lines extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'product_lines';
    protected $primaryKey='Product_line_id';
    public $timestamps = false;
    public $incrementing=false;

//relation
    public function published()
    {
        return $this->belongsTo('App\Models\Publishers');
    }

    public function supply()
    {
        return $this->hasMany('App\Models\Supply_logs');
    }
}
