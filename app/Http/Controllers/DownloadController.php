<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
    public function index()
    {
        return view('pages.download.index');
    }
}