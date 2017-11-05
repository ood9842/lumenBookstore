<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class BookController extends BaseController
{
    public function showBooks($data)
    {
      return view('book_shelf', $data);
    }

}
