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


    public function search($s) {
        $photos = Photo::whereRaw("title like concat('%',?,'%')", [$s])->orderBy('votes', 'desc')->get();
        $users = User::whereRaw("name like concat(?,'%')", [$s])->orderBy('created_at', 'desc')->get();

        return view("firstcontroller.search", ["photos" => $photos, "users"=>$users]);

    }



}
