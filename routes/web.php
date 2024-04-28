<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\exampleController;
use App\Http\Controllers\Mycontroller;

Route::get('/', function () {
    return view('welcome');
});
route ::get('Ola/{id?}',function($id=0){
    return "Welcome to MyWebsite" . $id;
})->whereNumber('id');
Route::get('test20', function(){
    return view('test');
    });
    Route::get('form1', function(){
        return view('form1');
        });

Route::post('recform1', function() {
return 'data received';
})->name('receiveform1');

Route::get('test', [Mycontroller::class, 'my_data']);
