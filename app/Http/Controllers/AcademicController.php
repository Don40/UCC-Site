<?php

namespace App\Http\Controllers;



class AcademicController extends Controller
{
    public function departments()
    {
        return view('pages.academic.department.index');
    }
}