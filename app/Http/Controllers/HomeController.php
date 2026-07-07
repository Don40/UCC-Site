<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

      public function student()
    {
        return view('pages.student_corner.index');
    }
}