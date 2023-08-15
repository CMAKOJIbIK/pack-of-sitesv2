<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
        if ($theme == null) {
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
        if ($theme == null) {
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
        if ($theme == null) {
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
        if ($theme == null) {
            $theme = 0;
        }
        return view("contact")
            ->with('themes', $themes)
            ->with('theme', $theme);
    }

    public function work()
    {
        $theme = session('theme_active');
        $themes = Theme::get();
        if ($theme == null) {
            $theme = 0;
        }
        return view("work")
            ->with('theme', $theme)
            ->with('themes', $themes);
    }

    public function settings()
    {
//dd(back()->getTargetUrl());
        $return_back = session('my_back_site');

        $theme = session('theme_active');
        $themes = Theme::get();

        if($return_back == null){
            session(['my_back_site' => route("index")]);

        }
        elseif (request()->url() != route("settings")) {
            session(['my_back_site' => back()->getTargetUrl()]);
            dd(back()->getTargetUrl());
        }
        $return_back = session('my_back_site');

//        dd(back()->getTargetUrl());


        if ($theme == null) {
            $theme = 0;
        }
        return view("settings")
            ->with('themes', $themes)
            ->with('theme', $theme)
            ->with('return_back', $return_back);
    }

    public function message(Request $request)
    {
        $name = $request->input('name');
        dd($name);
        $message = new Message();
        $message->name = "serejenka";
        $message->surname = "nikitchenko";
        $message->gmail = "smurf@gmail.com";
        $message->message = "aaaaaaaaaaaaaaaaa";
        $message->save();
        return back();

    }
    public function admin()
    {
        $theme = session('theme_active');
        $themes = Theme::get();
        if ($theme == null) {
            $theme = 0;
        }
        return view("admin")
            ->with('theme', $theme)
            ->with('themes', $themes);
    }
}
