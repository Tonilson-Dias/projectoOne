<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*

Route::get('/users', function(){
    $users = [
        [
            'name' => 'Inacio',
            'username' => 'inacio'
        ],
        [
            'name' => 'Paulino',
            'username' => 'paulino'
        ]
    ];
    return view('users', ['users' => $users]);
});

*/

Route::get('/soga_principal', function() {
         return view('soga_principal');
},);

Route::get('/login', function() {
    return view('login');
},);

Route::get('/cadastro', function() {
    return view('cadastro');
},);

Route::get('/cadastros', function() {
    return view('cadastros');
},);

Route::get('/chat', function() {
    return view('chat');
},);

Route::get('/friend_proile', function() {
    return view('friend_profile');
},);

Route::get('/friends', function() {
    return view('friends');
},);

Route::get('/friends', function() {
    return view('friends');
},);

Route::get('/index', function() {
    return view('index');
},);

Route::get('/profile', function() {
    return view('profile');
},);

Route::get('/saved', function() {
    return view('saved');
},);

Route::get('/perfil', 'PerfilContro@index')->name('cadastro');
Route::get('/perfil', 'PerfilContro@index')->name('login');
