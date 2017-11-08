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

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/

//Index Page
$router->get('/', 'Controller@index');

//book page

$router->get('/books', 'BookController@index');//show all
$router->get('/book/edit/{id}', 'BookController@edit');//edit
$router->get('/book/form', 'BookController@form');//form to create
$router->get('/book/detail/{id}', 'BookController@read');//show detail
$router->post('/book/create', 'BookController@create');//store new table
$router->post('/book/update/{id}', 'BookController@update');//edit table
$router->get('/book/delete/{id}', 'BookController@delete');//delete table

//person page
$router->get('/persons', 'PersonController@index');//show all
$router->get('/person/edit/{id}', 'PersonController@edit');//edit
$router->get('/person/form', 'PersonController@form');//form to create
$router->get('/person/detail/{id}', 'PersonController@read');//show detail
$router->post('/person/create', 'PersonController@create');//store new table
$router->post('/person/update/{id}', 'PersonController@update');//edit table
$router->get('/person/delete/{id}', 'PersonController@delete');//delete table

//customer page

$router->get('/customers', 'CustomerController@index');//show all
$router->get('/customer/edit/{id}', 'CustomerController@edit');//edit
$router->get('/customer/form', 'CustomerController@form');//form to create
$router->get('/customer/detail/{id}', 'CustomerController@read');//show detail
$router->post('/customer/create', 'CustomerController@create');//store new table
$router->post('/customer/update/{id}', 'CustomerController@update');//edit table
$router->get('/customer/delete/{id}', 'CustomerController@delete');//delete table

//employee page

$router->get('/employees', 'EmployeeController@index');//show all
$router->get('/employee/edit/{id}', 'EmployeeController@edit');//edit
$router->get('/employee/form', 'EmployeeController@form');//form to create
$router->get('/employee/detail/{id}', 'EmployeeController@read');//show detail
$router->post('/employee/create', 'EmployeeController@create');//store new table
$router->post('/employee/update/{id}', 'EmployeeController@update');//edit table
$router->get('/employee/delete/{id}', 'EmployeeController@delete');//delete table

$router->get('/book_in_stock', 'Book_in_stockController@index');//show all
$router->get('/book_in_stock/edit/{id}/{id2}', 'Book_in_stockController@edit');
$router->get('/book_in_stock/form', 'Book_in_stockController@form');

$router->post('/book_in_stock/update/{id}/{id2}', 'Book_in_stockController@update');//edit table
$router->get('/book_in_stock/delete/{id}/{id2}', 'Book_in_stockController@delete');//
$router->get('/book/edit/{id}', 'BookController@edit');

//show book in stock page
//$router->get('/book_in_stock', 'Book_in_stockController@index');//for admin













// $router->get('/customers', function(){
//     $customers=Customers::all();
//     return $customers;
// });
//
// $router->get('/employees', function(){
//     $employees=Employees::all();
//     return $employees;
// });
//
// $router->get('/managers', function(){
//     $managers=Managers::all();
//     return $managers;
// });
//
// $router->get('/persons', function(){
//     $persons=Persons::all();
//     return $persons;
// });
//
// $router->get('/product_lines', function(){
//     $product_lines=Product_lines::all();
//     return $product_lines;
// });
//
// $router->get('/publishers', function(){
//     $publishers=Publishers::all();
//     return $publishers;
// });
//
// $router->get('/sell_details', function(){
//     $sell_details=Sell_details::all();
//     return $sell_details;
// });
//
// $router->get('/sell_logs', function(){
//     $sell_logs=Sell_logs::all();
//     return $sell_logs;
// });
//
// $router->get('/staffs', function(){
//     $staffs=Staffs::all();
//     return $staffs;
// });
//
// $router->get('/stocks', function(){
//     $stocks=Stocks::all();
//     return $stocks;
// });
//
// $router->get('/stock_keepers', function(){
//     $stock_keepers=Stock_keepers::all();
//     return $stock_keepers;
// });
//
// $router->get('/stores', function(){
//     $stores=Stores::all();
//     return $stores;
// });
//
// $router->get('/supply_details', function(){
//     $supply_details=Supply_details::all();
//     return $supply_details;
// });
//
// $router->get('/supply_logs', function(){
//     $supply_logs=Supply_logs::all();
//     return $supply_logs;
// });
