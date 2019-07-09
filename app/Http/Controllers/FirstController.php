<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

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

    public function store(Request $request) {
        $photo = new Photo();
        $photo->title = $request->input('title');
        $photo->url = $request->input('url');
        $photo->votes = 0;
        $photo->save(); // INSERT INTO photos....
        return redirect("/");
    }

}
