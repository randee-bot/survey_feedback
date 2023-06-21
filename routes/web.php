<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('ticket_input');
});

Route::get('/details', [Test::class,'verify']);

Route::get('/survey_feedback', [Test::class, 'verifyb']);

Route::post('/thankyou', function () {
    return view('thank_you');
});

Route::get('/insert', [Test::class, 'insert']);

