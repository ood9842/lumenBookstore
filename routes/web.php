<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Book_in_stock;
use App\Customers;
use App\Employees;
use App\Managers;
use App\Persons;
use App\Product_lines;
use App\Publishers;
use App\Sell_details;
use App\Sell_logs;
use App\Staffs;
use App\Stock_keepers;
use App\Stocks;
use App\Stores;
use App\Supply_details;
use App\Supply_logs;


$router->get('/', function () use ($router) {
    return $router->app->version();
});

//show book page
$router->get('/books', 'BookController@index');//for admin
$router->get('/book/{id}', 'BookController@detail');//for admin
$router->get('/book/create', 'BookController@create');//for admin
$router->get('/book/delete', 'BookController@delete');




//show book in stock page
$router->get('/book_in_stock', 'Book_in_stockController@index');//for admin













$router->get('/customers', function(){
    $customers=Customers::all();
    return $customers;
});

$router->get('/employees', function(){
    $employees=Employees::all();
    return $employees;
});

$router->get('/managers', function(){
    $managers=Managers::all();
    return $managers;
});

$router->get('/persons', function(){
    $persons=Persons::all();
    return $persons;
});

$router->get('/product_lines', function(){
    $product_lines=Product_lines::all();
    return $product_lines;
});

$router->get('/publishers', function(){
    $publishers=Publishers::all();
    return $publishers;
});

$router->get('/sell_details', function(){
    $sell_details=Sell_details::all();
    return $sell_details;
});

$router->get('/sell_logs', function(){
    $sell_logs=Sell_logs::all();
    return $sell_logs;
});

$router->get('/staffs', function(){
    $staffs=Staffs::all();
    return $staffs;
});

$router->get('/stocks', function(){
    $stocks=Stocks::all();
    return $stocks;
});

$router->get('/stock_keepers', function(){
    $stock_keepers=Stock_keepers::all();
    return $stock_keepers;
});

$router->get('/stores', function(){
    $stores=Stores::all();
    return $stores;
});

$router->get('/supply_details', function(){
    $supply_details=Supply_details::all();
    return $supply_details;
});

$router->get('/supply_logs', function(){
    $supply_logs=Supply_logs::all();
    return $supply_logs;
});
