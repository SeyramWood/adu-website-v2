<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return inertia('FrontEnd/Home');
    }
    public function about()
    {
        return inertia('FrontEnd/About');
    }
    public function admissions()
    {
        return inertia('FrontEnd/Admissions');
    }
    public function Academics()
    {
        return inertia('FrontEnd/Academics');
    }
}
