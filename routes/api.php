<?php

use App\Http\Resources\CartResource;
use App\Models\Cart;
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
Route::get('/cart', function(Request $request) {
    return CartResource::collection(Cart::all());
});
Route::get('/cart/{id}/save', function(Request $request, $id) {
    $qty = $request->get('qty');
    $cart = Cart::find($id);
    if (!$cart) {
        return response(['data' => 'id not found', 'status' => false]);
    }
    $qty = intval($qty);
    if ($qty == 0) {
        return response(['data' => 'qty should be greater than 0', 'status' => false]);
    }
    $cart->qty = $qty;
    $cart->save();
    return response(['data' => null, 'status' => true]);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
