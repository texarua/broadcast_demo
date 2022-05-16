<?php

use App\calculateAge;
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

// Route::get('/', function (calculateAge $calculateAge) {
//     $calculateAge->provide_birth_year(1995);

//     return $calculateAge->get_age();
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'UserController@index' );


app()->bind('ageCalculator', function() {
    return new \App\calculateAge();
});


