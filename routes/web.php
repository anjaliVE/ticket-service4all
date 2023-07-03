<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{
    HomeController,
    TicketsController,
    CommentsController
};
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


// Route::group(['middleware' => 'language'], function (){ });

    Route::get('/', function () {
        return view('welcome');
    });

    //verified routes
    Auth::routes(['verify' => true]);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('userinfo', [HomeController::class, 'UserInfo'])->name('userinfo');
    Route::get('edit-userinfo', [HomeController::class, 'editUserInfo'])->name('edit-userinfo');
    Route::post('update-userinfo', [HomeController::class, 'UpdateUserInfo'])->name('update-userinfo');


    Route::get('new-ticket', [TicketsController::class, 'createNewTicket']);
    Route::post('new-ticket', [TicketsController::class, 'storeNewTicketRecord']);
    Route::get('my_tickets', [TicketsController::class, 'userTickets'])->name('my_tickets');
    Route::get('tickets/{ticket_id}', [TicketsController::class, 'getTicketData']);
    Route::post('comment', [CommentsController::class, 'storeCommentData']);
    
    //Admin routes
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
        Route::get('tickets', [TicketsController::class, 'getAllTickets']);
        Route::post('close_ticket/{ticket_id}', [TicketsController::class, 'closeTicket']);
    });
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


