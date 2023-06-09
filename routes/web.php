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

// Route::get('/', function () {
//     return view('home');
// });
Route::group(['middleware' => ['auth']], function () {
Route::group(['middleware' => ['auth']], function  (){
    Route::get('/home', 'PageController@home');
    Route::get('/profile', 'PageController@profile');
    Route::get('/mahasiswa', 'PageController@mahasiswa');
    Route::get('/mahasiswa/find', 'PageController@find');
    Route::get('/mahasiswa/formtambah', 'PageController@tambah');
    Route::post('/mahasiswa/simpan', 'PageController@simpan');
    Route::get('/mahasiswa/desc', 'PageController@desc'); 
    Route::get('/mahasiswa/formedit/{id}', 'PageController@edit');
    // Route::post('/mahasiswa/updatemhs/{id}', 'PageController@updatemhs');
    Route::put('/mahasiswa/updatemhs/{id}', 'PageController@updatemhs');
    // Route::get('/mahasiswa/deletemhs/{id}', 'PageController@deletemhs');
    Route::get('/mahasiswa/deletemhs/{id}', 'PageController@deletemhs');
    // User Logout
    Route::get('/logout', 'AuthController@logout');
    // Contact
    Route::get('/contact', 'PageController@contact');
    Route::get(
        '/artikel',
        function () {
            return view('artikel', ['key' => 'artikel']);
        }
    );
    Route::get(
        '/task',
        function () {
            return view('task', ['key' => 'task']);
        }
    );
});
// USER
Route::group(['middleware' => ['guest']], function () {
    // Register
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    // Login
    Route::get('/', 'AuthController@login')->name('login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
});
Route::get('/login', function () {
    return view('login');
})->middleware('guest');

});
// USER
Route::group(['middleware' => ['guest']], function  (){
    Route::get('/register', 'AuthController@register');

    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/', 'AuthController@login')->name('login');
    
    Route::post('/ceklogin', 'AuthController@ceklogin');
});
Route::get('/login', function(){
    return view('login');
})->middleware('guest');