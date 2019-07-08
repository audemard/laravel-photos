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
}
