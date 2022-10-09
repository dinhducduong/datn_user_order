<?php

use App\Http\Controllers\api\Auth\UserController;
use App\Http\Controllers\api\Cart\CartController;
use App\Http\Controllers\api\CreateCartConTroller;
use App\Http\Controllers\api\ExtensionController;
use App\Http\Controllers\api\Order\OrderController;
use App\Http\Controllers\api\Transaction\TransactionController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/extension-login', [ExtensionController::class, 'login']);
Route::post('/create-cart', [ExtensionController::class, 'createCart']);
Route::get('/get-exchange-rate', [ExtensionController::class, 'getExchangeRate']);
Route::get('/test', [TestController::class, 'index']);

///////////////
//public api
Route::post('/login', [UserController::class, 'getLogin']);

// protected api
Route::middleware('auth:api,web')->group(function () 
{

    Route::get('/user', [UserController::class, 'getUserInfo']);
    //Đơn hàng
    Route::prefix('order')->group(function () {

        Route::get('get-order', [OrderController::class, 'getOrder']);

        Route::post('get-filter-order', [OrderController::class, 'getFilterOrder']);

        Route::post('create-order', [OrderController::class, 'createOrder']);
    });

    //Thông báo
    Route::prefix('transaction')->group(function () {

        Route::get('get-transaction', [TransactionController::class, 'getTransaction']);
    });

    Route::prefix('cart')->group(function () {
        Route::get('list', [CartController::class, 'getCart']);
        Route::post('create', [CartController::class, 'cartCreate']);
    });
    Route::delete("cart-product/{id}", [CartController:: class, 'removeProduct']);
    Route::post("cart-checkout", [CartController::class, "cartCheckout"]);
});
