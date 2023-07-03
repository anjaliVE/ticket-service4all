<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use Stichoza\GoogleTranslate\GoogleTranslate;

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


// Route::group(['middleware' => 'language'], function (){

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('lang/home', [LangController::class, 'index']);
    Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

    Auth::routes(['verify' => true]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('userinfo', [App\Http\Controllers\HomeController::class, 'UserInfo'])->name('userinfo');
    Route::get('edit-userinfo', [App\Http\Controllers\HomeController::class, 'editUserInfo'])->name('edit-userinfo');
    Route::post('update-userinfo', [App\Http\Controllers\HomeController::class, 'UpdateUserInfo'])->name('update-userinfo');




    Route::get('new-ticket', [App\Http\Controllers\TicketsController::class, 'create']);
    Route::post('new-ticket', [App\Http\Controllers\TicketsController::class, 'store']);
    Route::get('my_tickets', [App\Http\Controllers\TicketsController::class, 'userTickets'])->name('my_tickets');
    Route::get('tickets/{ticket_id}', [App\Http\Controllers\TicketsController::class, 'show']);
    Route::post('comment', [App\Http\Controllers\CommentsController::class, 'postComment']);
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
        Route::get('tickets', [App\Http\Controllers\TicketsController::class, 'index']);
        Route::post('close_ticket/{ticket_id}', [App\Http\Controllers\TicketsController::class, 'close']);
    });
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// });
