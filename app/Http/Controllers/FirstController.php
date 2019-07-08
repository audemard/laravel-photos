<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index() {
        $photos = ["/images/portfolio/1.jpg", "/images/portfolio/2.jpg", "/images/portfolio/3.jpg", "/images/portfolio/4.jpg",
        "/images/portfolio/5.jpg", "/images/portfolio/6.jpg"];
        return view("firstcontroller.index", ["photos" => $photos]);
    }


    public function about() {
        return view("firstcontroller.about");
    }

    public function article($id) {
        return view("firstcontroller.article", ["id" => $id]);
    }
}
