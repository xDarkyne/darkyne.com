<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function work() {
        return view('work');
    }

    public function eso() {
        return view('eso');
    }

    public function contact() {
        return view('contact');
    }
}
