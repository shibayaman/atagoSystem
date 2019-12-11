<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\s_kanris;

class PurchaseController extends Controller
{
  public function showCart() {
    return view('Cart');
  }

  public function getCart() {
    //仮ユーザ
    $userId = 1;

    $carts = Cart::with('product')->where('customer_id', $userId)->get();
    return($carts);
  }

  public function updateCart(Request $request) {
    //仮ユーザ
    $userId = 1;

    $validated = $request->validate([
      'id' => 'required|integer',
      'amount' => 'required|integer'
    ]);
    
    $id = $validated['id'];
    $cart = Cart::where('id', $id)->where('customer_id', $userId)->first();

    if(is_null($cart)) {
      return json_encode (null);
    } 

    $cart->update(['amount' => $validated['amount']]);
    return $cart;
  }
}
