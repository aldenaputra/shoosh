<?php

namespace App\Http\Controllers;

use App\Models\shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    // public function productdisplay() {
    //     $shoes = shoe::all();
    //     return view('productdisplay', compact('shoes'));
    // }

    public function productdisplay(Request $request)
    {
        $category = $request->get('category');
        $shoes = $category ? shoe::where('type', $category)->get() : shoe::all();

        return view('productdisplay', compact('shoes', 'category'));
    }

    // public function productdetail($id) {
    //     $shoe = shoe::findOrFail($id);
    //     return view('productdetail', compact('shoe'));
    // }

    public function productdetail($id, Request $request) {
        $shoe = shoe::find($id);
        $category = $request->get('category');

        return view('productdetail', compact('shoe', 'category'));
    }
}
