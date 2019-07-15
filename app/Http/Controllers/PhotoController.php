<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{

    public function __construct() {
        $this->middleware("auth");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("photocontroller.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        if($photo->user->id != Auth::id())
            abort(403);
        $photo->delete();
        return back();
    }
}
