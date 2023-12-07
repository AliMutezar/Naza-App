<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    public function index()
    {
        return view('frontend_layouts.porfolio', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }

    public function portfolioDetails()
    {
        return view('frontend_layouts.porfolio_details', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }
}
