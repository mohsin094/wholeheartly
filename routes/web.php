<?php

use App\Http\Controllers\OrderController;
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
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'addFeedback'])->name('addFeedback');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin');
Route::post('/order/add', [OrderController::class, 'addOrder'])->name('addOrder');
Route::post('/order/update', [OrderController::class, 'updateOrder']);
Route::post('/order/delete', [OrderController::class, 'deleteOrder']);

