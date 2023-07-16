<?php

namespace App\Http\Controllers;

use App\Models\Theme;


class PageController extends Controller
{
    public function change_themes()
    {

        return redirect("settings");

    }

    function theme_1()
    {

        session(['theme_active' => 0]);
        return back()->withInput();

    }

    function theme_2()
    {

        session(['theme_active' => 1]);
        return back()->withInput();

    }

    function theme_3()
    {

        session(['theme_active' => 2]);
        return back()->withInput();

    }

    public function skills()
    {
        $theme = session('theme_active');
        $themes = Theme::get();
        if($theme == null){
            $theme = 0;
        }
        return view("skills")
            ->with('themes', $themes)
            ->with('theme', $theme);
    }

    public function about()
    {
        $theme = session('theme_active');
        $themes = Theme::get();
        if($theme == null){
            $theme = 0;
        }
        return view("about")
            ->with('themes', $themes)
            ->with('theme', $theme);
    }

    public function index()
    {
//        session(['key' => 'value']);
        $theme = session('theme_active');
        $themes = Theme::get();
        if($theme == null){
            $theme = 0;
        }
        return view("index")

            ->with('themes', $themes)
            ->with('theme', $theme);
    }

    public function cursor_anim()
    {
        return view("cursor_anim");
    }

    public function contact()
    {
        $theme = session('theme_active');
        $themes = Theme::get();
        if($theme == null){
            $theme = 0;
        }
        return view("contact")
            ->with('themes', $themes)
            ->with('theme', $theme)
            ;
    }

    public function work()
    {
        $theme = session('theme_active');
        $themes = Theme::get();
        if($theme == null){
            $theme = 0;
        }
        return view("work")
            ->with('theme', $theme)
            ->with('themes', $themes)
            ;
    }

    public function settings()
    {


        $theme = session('theme_active');
        $themes = Theme::get();
        return view("settings")
            ->with('themes', $themes)
            ->with('theme', $theme);
    }


}
