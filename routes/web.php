<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FeedbackController::class, 'home'])->name('home');
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'addFeedback'])->name('addFeedback');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin');
Route::post('/order/add', [OrderController::class, 'addOrder'])->name('addOrder');
Route::post('/order/update', [OrderController::class, 'updateOrder']);
Route::post('/order/delete', [OrderController::class, 'deleteOrder']);
Route::post('/order/checkOrder', [OrderController::class, 'checkOrder']);
Route::post('/import-orders', [OrderController::class, 'importOrders'])->name('importOrders');
Route::post('/setting/saveSetting', [SettingController::class, 'saveSetting'])->name('saveSetting');


