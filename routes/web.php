<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('select-query', function () {
    $users = DB::select("SELECT * from users LIMIT  25");
    return view('users-query',["users" => $users]);
});

Route::get('insert-query', function () {
    DB::insert('insert into users (name, email, password) values (? ,?, ?)', [ 'Marc','email@email.com',"".bcrypt('password').""]);
});

Route::get('select-query-where', function () {
    $users = DB::select("SELECT * from users where name =  :name",['name'=>'Marc']);
    return view('users-query',["users" => $users]);
});

Route::get('delete-query', function () {
    $deleted = DB::delete("DELETE from users");
    return view('delete',["deleted" => $deleted]);
});
