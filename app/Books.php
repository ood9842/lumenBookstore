<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $primaryKey='Book_id';
    public $incrementing=false;

//relation
    public function in_stock()
    {
        return $this->hasMany('App\Book_in_stock');
    }

    public function sell()
    {
        return $this->hasMany('App\Sell_details');
    }

    public function supply()
    {
        return $this->hasMany('App\Supply_details');
    }
//
    public function create()
    {
      $Newtable = DB::table('books')->create();
      return $Newtable;
    }

}
