<?php

use App\Models\User;
use App\Services\Stripe\Payment;
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
Route::get('/', function() {
    return view('welcome');    
});

Route::get('/payment', function() {
    Payment::process();
});

Route::view('/view', 'test', ['firstName' => 'Nikola', 'lastName' => 'Janeski']);

Route::get('/user/{user}', function(User $user) {
    return view('profile', ['user' => $user->getAttributes()]);
})->name('show');


Route::redirect('/user', '/');

// Route::get('/user', function() {
//     return 'This will get info for the user';    
// });

// Route::post('/user', function() {
//     return 'This will insert user';    
// });

// Route::put('/user', function() {
//     return 'This will update user';    
// });

// Route::patch('/user', function() {
//     return 'This will update user';    
// });

// Route::delete('/user', function() {
//     return 'This will delete user';    
// });

