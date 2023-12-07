<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend_layouts.home', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }
}
