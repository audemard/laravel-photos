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


    public function utilisateur($id) {

    }






}
