<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('frontend_layouts.service', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }

    public function serviceDetails()
    {
        return view('frontend_layouts.service_details', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }
}
