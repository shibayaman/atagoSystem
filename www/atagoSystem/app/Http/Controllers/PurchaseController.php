<?php

namespace App\Http\Controllers;

use Auth;
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

  public function addCart(Request $request) {
    $user = Auth::user();

    $safeValues = $request->validate([
      'item_number' => 'required|integer|exists:items',
      'amount' => 'required|integer|min:0'
    ]);

    if($oldCart = Cart::where('customer_id', $user->id)->where('product_id', $safeValues['item_number'])->first()) {
      $oldCart->amount += $safeValues['amount'];
      $oldCart->save();

      return view('cart');
    }

    $cart = new Cart();
    $cart->customer_id = $user->id;
    $cart->product_id = $safeValues['item_number'];
    $cart->amount = $safeValues['amount'];
    $cart->save();

    return view('cart');
  }

  public function getCart() {
    $user = Auth::user();

    $carts = Cart::with('item')->where('customer_id', $user->id)->get();
    return($carts);
  }

  public function updateCart(Request $request) {
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
