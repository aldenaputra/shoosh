<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
    public function viewReturn($id)
    {
        $shoe = shoe::find($id);
        return view('return', ['data' => $shoe]);
    }

    public function updateStock(Request $request, $id){

        $shoe = shoe::find($id);
        // $stock = $shoe->stock++;\
    
        DB::table('shoes')->where('id', $id)->increment('stock', 1);
        try {
            $shoe->update([
                'brand_id' => $shoe->brand_id,
                'name' => $shoe->name,
                'size_EU' => $shoe->size_EU,
                'type' => $shoe->type,
                'shoe_category' => $shoe->shoe_category,
                'stock' => $shoe->stock,
                'price' => $shoe->price,
                'image' => $shoe->image,
            ]);
            return redirect()->route('viewReturn', $shoe->id)->with('success', "$request->nama Shoes Succesfully Returned!");
        } catch (\Exception $e) {
            return redirect()->route('viewReturn', $shoe->id)->with('error', "$request->nama Sorry, Shoes Unsuccessfully Return");
        }
    }
}
