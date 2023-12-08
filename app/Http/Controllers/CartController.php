<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Home;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();
        return view('shopping-cart')->with('homes', $homes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCart($id)
    {
        //
        $home = Home::findOrFail($id);

        // $cart = session()->get('cart', []);

        // if(isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        // }  else {
        //     $cart[$id] = [
        //         "fotoProduk" => $home->fotoProduk,
        //         "namaProduk" => $home->namaProduk,
        //         "variasi" => $home->variasi,
        //         "harga" => $home->harga,
        //         "quantity" => 1
        //     ];
        // }

        // session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function create($id){
        $homes = Home::all();
        $home = Home::findOrFail($id);

        return view('shopping-cart')->with('homes', $homes)->with('home', $home);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        //
        $home = Home::findOrFail($id);

        $cart = new Cart();
        $cart->harga = $home->harga;
        $kuantitas = $request->input('quantity');
        $totalHarga = $kuantitas * $cart->harga;

        $requestCart = [
            'fotoProduk' => $home->fotoProduk,
            'namaProduk' => $home->namaProduk,
            'variasi' => $home->variasi,
            'harga' => $home->harga,
            'quantity' => $kuantitas,
            'subtotalHarga'=> $totalHarga,
        ];

        Cart::create($requestCart);
        return redirect(route('home'));

        // hitung harga
        // $kuantitas = $request->input('quantity');
        // $totalHarga = $kuantitas * $item->subHarga;

        // $requestCart = [
        //     // 'fotoBarang' => $request->fotoBarang,
        //     'namaProduk' => $request->input('namaProduk'),
        //     'hargaBarang' => $item->Harga,
        //     'quantity' => $request->input('quantity'),
        //     'subTotalHarga'=> $subTotal,
        // ];
        // Item::create($requestCart);
        // return redirect(route('checkout'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        // if($request->id) {
        //     $cart = session()->get('cart');
        //     if(isset($cart[$request->id])) {
        //         unset($cart[$request->id]);
        //         session()->put('cart', $cart);
        //     }
        //     session()->flash('success', 'Product successfully removed!');
        // }
        // $delete = $request->has('delete');
        // $home = Home::destroy($delete);
        $home = Home::destroy($id);
        // $home = Home::find($id);
        // $home->delete();
        return redirect(route('home'));
    }
}
