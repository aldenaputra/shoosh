<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\shoe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    public function createReview(Request $request, $id){
        // dd($request);
        $request->validate([
            'nickname' => 'required',
            'title' => 'required', 
            'description' => 'required',
            'quality' => ['required', Rule::in(['1', '2', '3', '4', '5'])],
            'value' => ['required', Rule::in(['1', '2', '3', '4', '5'])],
            'price' => ['required', Rule::in(['1', '2', '3', '4', '5'])],
        ]);

        $shoe = shoe::find($id);

        try {
            review::create([
                'shoes_id' => $id,
                'nickname' => $request->nickname,
                'title' => $request->title,
                'description' => $request->description,
                'quality' => $request->quality,
                'value' => $request->value,
                'price' => $request->price,
            ]);
            return redirect()->route('transaction-history.show', $shoe->id)->with('success', "$request->nama Review Succesfully Added!");
        } catch (\Exception $e) {
            return redirect()->route('transaction-history.show', $shoe->id)->with('error', "$request->nama Sorry, Review Unsuccessfully Added");
        }
    }
}
