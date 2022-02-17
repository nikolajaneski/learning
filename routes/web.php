<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
// Route::get('/', function() {
//     return view('welcome');    
// });

// Route::get('/payment', function() {
//     Payment::process();
// });

// Route::view('/view', 'test', ['firstName' => 'Nikola', 'lastName' => 'Janeski']);

// Route::get('/user/{user}', function(User $user) {
//     return view('profile', ['user' => $user->getAttributes()]);
// })->name('show');


// Route::redirect('/user', '/');

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


Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{user}/edit', [UserController::class, 'edit']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'delete']);


Route::resource('product', ProductController::class);



Route::get('/invoke', ImageController::class);