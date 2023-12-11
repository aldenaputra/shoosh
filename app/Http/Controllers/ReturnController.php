<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\TransactionHistory;
use App\Models\shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
    public function updateStock(Request $request, $shoeid){

        //$shoeid = $request->input('shoeid');
        $shoe = shoe::findOrFail($shoeid);
        // $stock = $shoe->stock++;\
        DB::table('shoes')->where('id', '=', $shoeid)->increment('stock', 1);

        try {
            // $shoe->stock += 1;
            // $shoe->save();
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

            $transaction = TransactionHistory::where('shoeid', '=', $shoeid)->first();
            return redirect()->route('transaction-history.show', $transaction->id)->with('success', "$request->nama Shoes Succesfully Returned!");
        } catch (\Exception $e) {
            return redirect()->route('transaction-history.show', $transaction->id)->with('error', "$request->nama Sorry, Shoes Unsuccessfully Return");
        }

        // try {
        //     DB::table('shoes')->where('id', $id)->increment('stock', 1);
        //     return redirect()->route('transaction-history.show', $id)->with('success', "$request->nama Shoes Successfully Returned!");
        // } catch (\Exception $e) {
        //     return redirect()->route('transaction-history.show', $id)->with('error', "$request->nama Sorry, Shoes Unsuccessfully Return");
        // }
    }
}
