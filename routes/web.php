<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserAccountController;

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

require __DIR__.'/auth.php';

Auth::routes();

#   HOME
#    ||
#   \\//
#    \/

// home page route
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

# MESSAGES
#    ||
#   \\//
#    \/

// show messages route
Route::get('/messages', [MessageController::class, 'index'])
    ->middleware(['auth', 'can:view,App\Models\Message'])
    ->name('view.messages');

// post messages route
Route::post('/messages', [MessageController::class, 'post'])
    ->name('send.message');

// delete messages route; takes the id of the message to be deleted
Route::delete('/messages/{id}', [MessageController::class, 'delete'])
    ->whereNumber('id')
    ->name('delete.message');

#   USERS
#    ||
#   \\//
#    \/

// show users route
Route::get('/users', [UserAccountController::class, 'index'])
    ->middleware(['auth', 'can:view,App\Models\User'])
    ->name('view.users');

// delete users route; takes the id of the user to be deleted
Route::delete('/users/{id}', [UserAccountController::class, 'delete'])
    ->whereNumber('id')
    ->name('delete.user');

# SITE-MAP
#    ||
#   \\//
#    \/

Route::get('/sitemap', function() {
    return view('sitemap');
});