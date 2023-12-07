<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('frontend_layouts.career', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }

    public function carrerDetails()
    {
        return view('frontend_layouts.career_details', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }
}
