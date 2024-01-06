<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['services'] = Service::all();
        $data['title'] = "Nazaconsult - Business Consulting";
        $data['meta_description'] = "Collaborate with Nazaconsults to enhance the development of your business";
        return view('frontend_layouts.home', $data);
    }
}
