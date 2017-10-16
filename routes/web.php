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

use App\Persons;
use App\Customers;
use App\Staffs;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//CRUD person
$router->get('/persons', function(){
    $persons=Persons::all();

    return $persons;
});

$router->get('/person/{P_id}', function($P_id){
    $person=Persons::findOrFail($P_id);

    return $person;
});

//tidy_access_count
$router->get('/persons', function(){
    $persons=Persons::all();

    return $persons;
});

//CRUD Customer
$router->get('/customers', function(){
    $customers=Customers::all();

    return $customers;
});

$router->get('/customer/{C_id}', function($C_id){
    $customer=Customers::findOrFail($C_id);

    return $customer;
});

$router->get('/customer/{C_id}/getname', function($C_id){
    $customer=Customers::findOrFail($C_id);
    $person=$customer->person;
    var_dump($person);
    //echo $person->first_name;
    //echo $person->last_name;
});
