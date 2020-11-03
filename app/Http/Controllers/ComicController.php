<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        
        return view ('index', compact('comics'));
    }

    public function indexAjax()
    {
        return view('index-ajax');
    }
}
