<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
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
            return redirect()->route('transaction-history.show', $shoe->id)->with('success', "$request->nama Shoes Succesfully Returned!");
        } catch (\Exception $e) {
            return redirect()->route('transaction-history.show', $shoe->id)->with('error', "$request->nama Sorry, Shoes Unsuccessfully Return");
        }
        
        try {
            DB::table('shoes')->where('id', $id)->increment('stock', 1);
            return redirect()->route('transaction-history.show', $id)->with('success', "$request->nama Shoes Successfully Returned!");
        } catch (\Exception $e) {
            return redirect()->route('transaction-history.show', $id)->with('error', "$request->nama Sorry, Shoes Unsuccessfully Return");
        }
    }
}
