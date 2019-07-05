<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index() {
        return "<h1>La page d'accueil de mon application</h1>";
    }


    public function about() {
        return "<h2>La page about de mon super site</h2>";
    }

    public function article($id) {
        return "<h3>L'article avec l'id = $id";
    }
}
