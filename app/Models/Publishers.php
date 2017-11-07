<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'publishers';
    public $timestamps = false;
    protected $primaryKey='Publisher_id';
    public $incrementing=false;

//relation
    public function product_line()
    {
        return $this->hasOne('App\Models\Product_lines');
    }

}
