<?php

use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('users')->group(function(){
    Route::get('/{id?}',function($id=null){
        return $id;
         //Envia parametros para view
         // return view('users',['id'=>$id]);
     })->name('user.index');
     Route::get('/edit',function(){ return 'edit';})->name('user.edit');

});



Route::get('/',[App\Http\Controllers\TestController::class,'index']);

Route::get('/home',[App\Http\Controllers\MainController::class,'index'])->name('site.dashboard');
