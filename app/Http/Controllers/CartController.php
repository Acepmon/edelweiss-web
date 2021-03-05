<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart')->with('info', 'Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Models\Product');

        return redirect()->route('cart')->with('success', 'Item was added to your cart!');
    }

    public function update(Request $request, $rowId)
    {
        Cart::update($rowId, $request->qty);

        return redirect()->route('cart')->with('success', 'Updated item quantity!');
    }

    public function destroy(Request $request, $id)
    {
        Cart::remove($id);

        return redirect()->route('cart')->with('success', 'Item has been removed from your cart!');
    }

    public function destroyAll()
    {
        Cart::destroy();

        return redirect()->route('cart')->with('success', 'All items has been removed!');
    }

}
