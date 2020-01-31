<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\s_kanris;

class PurchaseController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function showCart() {
    return view('Cart');
  }

  public function getCart() {
    //仮ユーザ
    $user = Auth::user();

    $carts = Cart::with('product')->where('customer_id', $user->id)->get();
    return($carts);
  }

  public function updateCart(Request $request) {
    //仮ユーザ
    $user = Auth::user();

    $validated = $request->validate([
      'id' => 'required|integer',
      'amount' => 'required|integer'
    ]);
    
    $id = $validated['id'];
    $cart = Cart::where('id', $id)->where('customer_id', $user->id)->first();

    if(is_null($cart)) {
      return json_encode (null);
    } 

    $cart->update(['amount' => $validated['amount']]);
    return $cart;
  }
}
