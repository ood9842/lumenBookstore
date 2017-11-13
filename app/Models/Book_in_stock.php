<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_in_stock extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = 'book_in_stocks';
    public $incrementing=false;
    public $timestamps = false;

//relation
    public function stock()
    {
        return $this->belongsTo('App\Models\Stocks','Stock_id','stock_id');
    }

    public function has_books()
    {
        return $this->belongsTo('App\Models\Books','Book_id','book_id');
    }
}
