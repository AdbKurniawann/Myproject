<?php

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

Route::get('/', function () {
    $siswa = App\Siswa::all();
    return view('user',['siswa'=>$siswa]);
});
Route::get('/login', 'Authcontroller@login');
Route::post('/postlogin','Authcontroller@postlogin');
Route::get('/dashboard', 'dashboardcontroller@index');
Route::post('/dashboard/create', 'dashboardcontroller@create');
Route::get('/dashboard/{id}/edit', 'dashboardcontroller@edit');
Route::post('/dashboard/{id}/update', 'dashboardcontroller@update');
Route::get('/dashboard/{id}/delete', 'dashboardcontroller@delete');

