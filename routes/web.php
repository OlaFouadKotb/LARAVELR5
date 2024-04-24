<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route ::get('Ola/{id}',function($id){
    return "Welcome to MyWebsite" . $id;
});