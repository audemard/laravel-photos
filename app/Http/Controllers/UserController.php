<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
         return view("usercontroller.show", ["user" => $user]);
    }


    public function suivre($id) {
        $user = User::find($id);
        if($user == false)
            abort(404);
        Auth::user()->ILikeThem()->toggle($id);
        return back();
    }

    public function updateoverview(Request $request) {
        $overview = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $request->input('overview'));
        Auth::user()->overview = $overview;
        Auth::user()->save();
        return back();

    }
}
