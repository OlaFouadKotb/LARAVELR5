<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\Studentcontroller;
use App\Models\Client;
use App\Models\Student;

Route::get('/',function(){
    return view('welcome');
});

Route::post('insertStudent',[Studentcontroller::class, 'store'])->name('insertStudent');
Route::get('addStudent',[Studentcontroller::class, 'create'])->name('addStudent');
Route::get('students',[StudentController::class,'index'])->name('students');
Route::get('editStudent/{id}',[StudentController::class,'edit'])->name('editStudent');
Route::put('updateStudent/{id}',[StudentController::class,'update'])->name('updateStudent');
Route::get('showStudent/{id}',[Studentcontroller::class, 'show'])->name('showStudent');
Route::delete('delStudent',[Studentcontroller::class, 'destroy'])->name('delStudent');
Route::get('trashStudent',[Studentcontroller::class,'trash'])->name('trashStudent');
Route::get('restoreStudent/{id}',[Studentcontroller::class,'restore'])->name('restoreStudent');
Route::delete('forceDeleteStudent',[Studentcontroller::class, 'forceDelete'])->name('forceDeleteStudent');
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::post('insertClient',[ClientController::class,'store'])->name('insertClient');
Route::get('addClient',[ClientController::class,'create'])->name('addClient');
Route::get('clients',[ClientController::class,'index'])->name('clients');
Route::get('editClient/{id}',[ClientController::class,'edit'])->name('editClient');
Route::put('updateClient/{id}',[ClientController::class,'update'])->name('updateClient');
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
Route::delete('delClient',[Clientcontroller::class, 'destroy'])->name('delClient');
Route::get('trashClient',[ClientController::class,'trash'])->name('trashClient');
Route::get('restoreClient/{id}',[ClientController::class,'restore'])->name('restoreClient');
Route::delete('forceDeleteClient',[Clientcontroller::class, 'forceDelete'])->name('forceDeleteClient');
////////////////////////////////////////////////////////////////////////////////////////
//Route::get('addClient',[ClientController::class,'index'])->name('insertClient');
// route ::get('Ola/{id?}',function($id=0){
//     return "Welcome to MyWebsite" . $id;
// })->whereNumber('id');
// Route::get('test20', function(){
//     return view('test');
//     });
//     Route::get('form1', function(){
//         return view('form1');
//         });

Route::post('recform1', function(Request $request) {
    return $request->all();
})->name('receiveform1');

Route::get('test', [Mycontroller::class, 'my_data']);


//Route::get('form1', [Postcontroller::class, 'store(Request $request)']);
// Route::view('send', 'sendData');
// Route::post('receive', function(Request $request) {
//     return $request->all();
// })->name('receive');
