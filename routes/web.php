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


//staff page
$router->get('/staffs', 'StaffController@index');//show all
$router->get('/staff/edit/{id}', 'StaffController@edit');//edit
$router->get('/staff/form', 'StaffController@form');//form to create
$router->get('/staff/detail/{id}', 'StaffController@read');//show detail
$router->post('/staff/create', 'StaffController@create');//store new table
$router->post('/staff/update/{id}', 'StaffController@update');//edit table
$router->get('/staff/delete/{id}', 'StaffController@delete');//delete table


//customer page
$router->get('/customers', 'CustomerController@index');//show all
$router->get('/customer/edit/{id}', 'CustomerController@edit');//edit
$router->get('/customer/form', 'CustomerController@form');//form to create
$router->get('/customer/detail/{id}', 'CustomerController@read');//show detail
$router->post('/customer/create', 'CustomerController@create');//store new table
$router->post('/customer/update/{id}', 'CustomerController@update');//edit table
$router->get('/customer/delete/{id}', 'CustomerController@delete');//delete table

//publisher page
$router->get('/publishers', 'PublisherController@index');//show all
$router->get('/publisher/edit/{id}', 'PublisherController@edit');//edit
$router->get('/publisher/form', 'PublisherController@form');//form to create
$router->get('/publisher/detail/{id}', 'PublisherController@read');//show detail
$router->post('/publisher/create', 'PublisherController@create');//store new table
$router->post('/publisher/update/{id}', 'PublisherController@update');//edit table
$router->get('/publisher/delete/{id}', 'PublisherController@delete');//delete table






$router->get('/book_in_stock', 'Book_in_stockController@index');//show all
$router->get('/book_in_stock/edit/{id}/{id2}', 'Book_in_stockController@edit');
$router->get('/book_in_stock/form', 'Book_in_stockController@form');

$router->post('/book_in_stock/update/{id}/{id2}', 'Book_in_stockController@update');//edit table
$router->get('/book_in_stock/delete/{id}/{id2}', 'Book_in_stockController@delete');//
$router->get('/book/edit/{id}', 'BookController@edit');
