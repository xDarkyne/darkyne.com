<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home() {
        return view('home')->with('page', 'home');
    }

    public function eso() {
        return view('eso')->with('page', 'eso');
    }
}
