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
//error Page
$router->get('/errors/page', 'Controller@errors');
$router->get('/chart/data/sell', 'ChartsController@sellChartData');
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

//supply_log page
$router->get('/supply_logs', 'Supply_logController@index');//show all
$router->get('/supply_log/edit/{id}', 'Supply_logController@edit');//edit
$router->get('/supply_log/form', 'Supply_logController@form');//form to create
$router->get('/supply_log/detail/{id}', 'Supply_logController@read');//show detail
$router->post('/supply_log/create', 'Supply_logController@create');//store new table
$router->get('/supply_log/update_detail/{id}', 'Supply_logController@update_detail');
$router->post('/supply_log/update/{id}', 'Supply_logController@update');//edit table
$router->get('/supply_log/delete/{id}', 'Supply_logController@delete');//delete table

//employee page
$router->get('/employees', 'EmployeeController@index');//show all
$router->get('/employee/edit/{id}/{id2}', 'EmployeeController@edit');//edit
$router->get('/employee/form', 'EmployeeController@form');//form to create
$router->get('/employee/detail/{id}/{id2}', 'EmployeeController@read');//show detail
$router->post('/employee/create', 'EmployeeController@create');//store new table
$router->post('/employee/update/{id}/{id2}', 'EmployeeController@update');//edit table
$router->get('/employee/delete/{id}/{id2}', 'EmployeeController@delete');//delete table

//sell_log page
$router->get('/sell_logs', 'Sell_logController@index');//show all
$router->get('/sell_log/edit/{id}', 'Sell_logController@edit');//edit
$router->get('/sell_log/form', 'Sell_logController@form');//form to create
$router->get('/sell_log/detail/{id}', 'Sell_logController@read');//show detail
$router->post('/sell_log/create', 'Sell_logController@create');
$router->get('/sell_log/update_detail/{id}', 'Sell_logController@update_detail');
$router->post('/sell_log/update/{id}', 'Sell_logController@update');//edit table
$router->get('/sell_log/delete/{id}', 'Sell_logController@delete');//delete table

//stock page
$router->get('/stocks', 'StockController@index');//show all
$router->get('/stock/edit/{id}', 'StockController@edit');//edit
$router->get('/stock/form', 'StockController@form');//form to create
$router->get('/stock/detail/{id}', 'StockController@read');//show detail
$router->post('/stock/create', 'StockController@create');//store new table
$router->post('/stock/update/{id}', 'StockController@update');//edit table
$router->get('/stock/delete/{id}', 'StockController@delete');//delete table

//store page
$router->get('/stores', 'StoreController@index');//show all
$router->get('/store/edit/{id}', 'StoreController@edit');//edit
$router->get('/store/form', 'StoreController@form');//form to create
$router->get('/store/detail/{id}', 'StoreController@read');//show detail
$router->post('/store/create', 'StoreController@create');//store new table
$router->post('/store/update/{id}', 'StoreController@update');//edit table
$router->get('/store/delete/{id}', 'StoreController@delete');//delete table

//manager page
$router->get('/managers', 'ManagerController@index');//show all
$router->get('/manager/edit/{id}', 'ManagerController@edit');//edit
$router->get('/manager/form', 'ManagerController@form');//form to create
$router->get('/manager/detail/{id}', 'ManagerController@read');//show detail
$router->post('/manager/create', 'ManagerController@create');//store new table
$router->post('/manager/update/{id}/{id2}', 'ManagerController@update');//edit table
$router->get('/manager/delete/{id}', 'ManagerController@delete');//delete table

//product_line page
$router->get('/product_lines', 'Product_lineController@index');//show all
$router->get('/product_line/edit/{id}', 'Product_lineController@edit');//edit
$router->get('/product_line/form', 'Product_lineController@form');//form to create
$router->get('/product_line/detail/{id}', 'Product_lineController@read');//show detail
$router->post('/product_line/create', 'Product_lineController@create');//store new table
$router->post('/product_line/update/{id}', 'Product_lineController@update');//edit table
$router->get('/product_line/delete/{id}', 'Product_lineController@delete');//delete table

////Book_in_stock page
$router->get('/book_in_stocks', 'Book_in_stockController@index');//show all
$router->get('/book_in_stock/edit/{id}/{id2}', 'Book_in_stockController@edit');//edit
$router->get('/book_in_stock/form', 'Book_in_stockController@form');//form to create
$router->get('/book_in_stock/detail/{id}/{id2}', 'Book_in_stockController@read');//show detail
$router->post('/book_in_stock/create', 'Book_in_stockController@create');//store new table
$router->post('/book_in_stock/update/{id}/{id2}', 'Book_in_stockController@update');//edit table
$router->get('/book_in_stock/delete/{id}/{id2}', 'Book_in_stockController@delete');//delete table

////Sell_detail page
$router->get('/sell_details', 'Sell_detailController@index');//show all
$router->get('/sell_detail/edit/{id}/{id2}', 'Sell_detailController@edit');//edit
$router->get('/sell_detail/form', 'Sell_detailController@form');//form to create
$router->get('/sell_detail/detail/{id}/{id2}', 'Sell_detailController@read');//show detail
$router->post('/sell_detail/create', 'Sell_detailController@create');//store new table
$router->post('/sell_detail/update/{id}/{id2}', 'Sell_detailController@update');//edit table
$router->get('/sell_detail/delete/{id}/{id2}', 'Sell_detailController@delete');//delete table

////Supply_detail page
$router->get('/supply_details', 'Supply_detailController@index');//show all
$router->get('/supply_detail/edit/{id}/{id2}', 'Supply_detailController@edit');//edit
$router->get('/supply_detail/form', 'Supply_detailController@form');//form to create
$router->get('/supply_detail/detail/{id}/{id2}', 'Supply_detailController@read');//show detail
$router->post('/supply_detail/create', 'Supply_detailController@create');//store new table
$router->post('/supply_detail/update/{id}/{id2}', 'Supply_detailController@update');//edit table
$router->get('/supply_detail/delete/{id}/{id2}', 'Supply_detailController@delete');//delete table

//manager page
$router->get('/stock_keepers', 'Stock_keeperController@index');//show all
$router->get('/stock_keeper/edit/{id}', 'Stock_keeperController@edit');//edit
$router->get('/stock_keeper/form', 'Stock_keeperController@form');//form to create
$router->get('/stock_keeper/detail/{id}', 'Stock_keeperController@read');//show detail
$router->post('/stock_keeper/create', 'Stock_keeperController@create');//store new table
$router->post('/stock_keeper/update/{id}/{id2}', 'Stock_keeperController@update');//edit table
$router->get('/stock_keeper/delete/{id}', 'Stock_keeperController@delete');//delete table
