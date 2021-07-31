<?php

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Product;
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
Route::get('/product/{id}/like', function(Request $request, $id) {
    $product = Product::find($id);
    if (!$product) {
        return response(['data' => null, 'message' => 'id not found', 'status' => false]);
    }
    if (!$product->like_count) {
        $product->like_count = 0;
    }
    $product->like_count++;
    $product->save();
    return response(['data' => null, 'status' => true]);
});
Route::get('/product/{id}/dislike', function(Request $request, $id) {
    $product = Product::find($id);
    if (!$product) {
        return response(['data' => null, 'message' => 'id not found', 'status' => false]);
    }
    $product->like_count--;
    if ($product->like_count <= 0) {
        $product->like_count = 0;
    }
    $product->save();
    return response(['data' => null, 'status' => true]);
});
Route::get('/cart/{id}/delete', function(Request $request, $id) {
    $cart = Cart::find($id);
    if (!$cart) {
        return response(['data' => null, 'message' => 'id not found', 'status' => false]);
    }
    $cart->delete();
    return response(['data' => null, 'status' => true]);
});
Route::get('/cart/{id}/save', function(Request $request, $id) {
    $qty = $request->get('qty');
    $cart = Cart::find($id);
    if (!$cart) {
        return response(['data' => null, 'message' => 'id not found', 'status' => false]);
    }
    $qty = intval($qty);
    if ($qty == 0) {
        return response(['data' =>  null, 'message' => 'qty should be greater than 0', 'status' => false]);
    }
    $cart->qty = $qty;
    $cart->save();
    return response(['data' => null, 'status' => true]);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
