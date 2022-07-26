<?php

use App\Models\Person;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/people', function () {
    return Person::find(5);
});

Route::group(['prefix'=>'','controller'=>\App\Http\Controllers\PersonController::class],function(){
    Route::name('')->group(function(){
        Route::get('/','index')->name('person.index');
        Route::get('/people','list')->name('');
        Route::get('/cities','cities')->name('');
        Route::post('/save','store')->name('person.store');
        Route::post('/edit/{person}','update')->name('person.update');
        Route::get('/edit/{person}','edit')->name('person.edit');
        Route::get('/delete/{person}','delete')->name('person.delete');
    });
});

Route::group(['prefix'=>'/son','controller'=>\App\Http\Controllers\SonController::class],function(){
    Route::name('')->group(function(){
        Route::get('','index')->name('');
        Route::get('/sons','sons')->name('');
        Route::post('/save','store')->name('');
        Route::post('/edit/{son}','update')->name('');
        Route::get('/edit/{son}','edit')->name('');
        Route::get('/delete/{son}','delete')->name('');
    });
});

Route::group(['prefix'=>'/city','controller'=>\App\Http\Controllers\CityController::class],function(){
    Route::name('')->group(function(){
        Route::get('','index')->name('');
        Route::post('/save','store')->name('');
        Route::post('/edit/{city}','update')->name('');
        Route::get('/edit/{city}','edit')->name('');
        Route::get('/delete/{city}','delete')->name('');
    });
});