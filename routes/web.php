<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', [FeedbackController::class, 'home'])->name('home');
Route::post('/feedback', [FeedbackController::class, 'addFeedback'])->name('addFeedback');

Auth::routes();

Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
Route::post('/order/add', [OrderController::class, 'addOrder'])->name('addOrder');
Route::post('/order/update', [OrderController::class, 'updateOrder']);
Route::post('/order/delete', [OrderController::class, 'deleteOrder']);
Route::post('/order/checkOrder', [OrderController::class, 'checkOrder']);
Route::post('/import-orders', [OrderController::class, 'importOrders'])->name('importOrders');
Route::post('/setting/saveSetting', [SettingController::class, 'saveSetting'])->name('saveSetting');

Route::get('admin/change-password', [ConfirmPasswordController::class, 'index'])->name('change.password.index');
Route::post('admin/change-password', [ConfirmPasswordController::class, 'store'])->name('change.password');
Route::get('admin/change-email', [ConfirmPasswordController::class, 'indexEmail'])->name('change.email.index');
Route::post('admin/change-email', [ConfirmPasswordController::class, 'storeEmail'])->name('change.email');
Route::get('/media-delete/{id}', [SettingController::class, 'deleteReviewImage'])->name('media.delete');
Route::post('ckeditor/upload', [FeedbackController::class, 'upload'])->name('ckeditor.upload');
