<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend_layouts.contact', [
            "title" => "Nazaconsult - Business Consulting",
            "meta_description" => "Collaborate with Nazaconsults to enhance the development of your business"
        ]);
    }

}
