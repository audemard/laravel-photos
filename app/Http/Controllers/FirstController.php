<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view("firstcontroller.index", ["photos" => $photos]);
    }


    public function about() {
        return view("firstcontroller.about");
    }

    public function article($id) {
        return view("firstcontroller.article", ["id" => $id]);
    }

    public function create() {
        return view("firstcontroller.create");
    }


    public function utilisateur($id) {
        $user = User::find($id);
        if($user == false)
            abort(404);
        return view("firstcontroller.utilisateur", ["user" => $user]);

    }


    public function suivre($id) {
        $user = User::find($id);
        if($user == false)
            abort(404);
        Auth::user()->ILikeThem()->toggle($id);
        return back();
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required|max:255|min:4',
            'image' => 'required|file|mimes:jpeg,bmp,png'
            ]);

        // Je ne viens ici que si le formaulaire est valide par rapport aux règles définies ci dessus
       // dd($_FILES, $request->file('image'));
        $name = $request->file('image')->hashName();
        $request->file('image')->move("uploads/".Auth::id(), $name);
        $photo = new Photo();
        $photo->title = $request->input('title');
        $photo->url = "/uploads/".Auth::id()."/".$name;
        $photo->votes = 0;
        $photo->user_id = Auth::id();
        $photo->save(); // INSERT INTO photos....
        return redirect("/");
    }

























}
