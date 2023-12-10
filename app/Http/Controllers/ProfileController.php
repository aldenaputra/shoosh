<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only(['name', 'address', 'shoesize']));

        $action = $request->input('action');

        if($action == "changeprofile"){
            return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
        }
        else{
            return redirect()->back()->with('success', 'Profile updated successfully!');
        }
    }
}
