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
    public function academics()
    {
        return inertia('FrontEnd/Academics');
    }
    public function iilab()
    {
        return inertia('FrontEnd/IIlab');
    }
    public function studentLife()
    {
        return inertia('FrontEnd/StudentLife');
    }
}
