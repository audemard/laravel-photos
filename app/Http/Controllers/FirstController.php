<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index() {
        $articles = ["1" => "Article 1", 2 => "Le numéro 2", 3 => "Le trois"];
        return view("firstcontroller.index", ["articles" => $articles]);
    }


    public function about() {
        return view("firstcontroller.about");
    }

    public function article($id) {
        return view("firstcontroller.article", ["id" => $id]);
    }
}
