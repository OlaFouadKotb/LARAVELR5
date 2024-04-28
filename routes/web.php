<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\PostController;
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

Route::post('recform1', function(Request $request) {
    return $request->all();
})->name('receiveform1');

Route::get('test', [Mycontroller::class, 'my_data']);
//Route::get('form1', [Postcontroller::class, 'store(Request $request)']);
// Route::view('send', 'sendData');
// Route::post('receive', function(Request $request) {
//     return $request->all();
// })->name('receive');