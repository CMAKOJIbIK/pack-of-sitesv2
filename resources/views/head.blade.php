<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{asset("res/web_image.png")}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">


    <link rel="stylesheet" href="{{asset('css/cloud.css')}}">


    <link rel="stylesheet" href="{{asset('css/cursor_anim.css')}}">
    <link rel="stylesheet" href="{{asset('css/breakout.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    @if($theme == 1)
        <link rel="stylesheet" href="{{asset('css/theme_green.css')}}">
        <link rel="stylesheet" href="{{asset('css/menu_theme_green.css')}}">
        <link rel="stylesheet" href="{{asset('css/about_theme_green.css')}}">
        <link rel="stylesheet" href="{{asset('css/skills_theme_green.css')}}">
        <link rel="stylesheet" href="{{asset('css/work_theme_green.css')}}">
        <link rel="stylesheet" href="{{asset('css/contact_theme_green.css')}}">
        <link rel="stylesheet" href="{{asset('css/settings_theme_green.css')}}">
    @elseif($theme == 2)
        <link rel="stylesheet" href="{{asset('css/theme_red.css')}}">
        <link rel="stylesheet" href="{{asset('css/menu_theme_red.css')}}">
        <link rel="stylesheet" href="{{asset('css/about_theme_red.css')}}">
        <link rel="stylesheet" href="{{asset('css/skills_theme_red.css')}}">
        <link rel="stylesheet" href="{{asset('css/work_theme_red.css')}}">
        <link rel="stylesheet" href="{{asset('css/contact_theme_red.css')}}">
        <link rel="stylesheet" href="{{asset('css/settings_theme_red.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{asset('css/skills.css')}}">
        <link rel="stylesheet" href="{{asset('css/about.css')}}">
        <link rel="stylesheet" href="{{asset('css/contact.css')}}">
        <link rel="stylesheet" href="{{asset('css/work.css')}}">
        <link rel="stylesheet" href="{{asset('css/settings.css')}}">


    @endif


</head>
