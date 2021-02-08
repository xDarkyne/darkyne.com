<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function work() {
        $projects = DB::table('project')->get();

        return view('work')->with('projects', $projects);
    }

    public function eso() {
        return view('eso');
    }

    public function contact() {
        return view('contact');
    }
}
