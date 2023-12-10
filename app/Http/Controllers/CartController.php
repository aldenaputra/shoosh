<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\shoe;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart($id){
        $shoe = shoe::findOrFail($id);
        $cart = session()->get('cart');


        $user = Auth::user();
        if ($user) {
            $userId = $user->id;
        } else {
            // User is not authenticated
            $userId = null;
        }


        $cart = [
            'userid' => $userId,
            'shoeid' => $shoe->id,
            'name' => $shoe->name,
            'image' => $shoe->image,
            'type' => $shoe->type,
            'shoe_category' => $shoe->shoe_category,
            'price' => $shoe->price,
            'quantity' => 1,
        ];

        session()->put('cart', $cart);
        return view('shopping-cart', compact('cart'));
    }

    public function cart(){
        $cart = session()->get('cart', []);
        return view('shopping-cart', compact('cart'));
    }

    public function increaseQuantity()
    {
        $cart = session()->get('cart', []);

        if (isset($cart)) {
            $cart['quantity']++;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }

    public function decreaseQuantity()
    {
        $cart = session()->get('cart', []);

        if (isset($cart) && ($cart['quantity'] > 1)) {
            $cart['quantity']--;
            session()->put('cart', $cart);
            return redirect()->route('cart');
        }

    }

    // CartController.php
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Cart cleared successfully.');
    }

}
