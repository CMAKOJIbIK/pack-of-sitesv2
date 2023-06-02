<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function skills()
    {
        return view("skills");
    }
    public function about()
    {
        return view("about");
    }
    public function index()
    {
        return view("index");
    }
    public function cursor_anim()
    {
        return view("cursor_anim");
    }
    public function contact()
    {
        return view("contact");
    }
}
