<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
</head>
<body>
<div class="vex">
    @include("main_menu")
    <div class="home">
        <div class="greeting">
            {{--    <pre><h1></h1></pre>--}}
            <code class="tags top-tags"> &lt;html&gt;</code>
            <code class="tags top-tags"> &lt;body&gt;</code>
            <div class="setting">
                <div class="sound">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="soundcloud" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                         class="svg-inline--fa fa-soundcloud fa-w-20 fa-5x">
                        <path fill="currentColor"
                              d="M111.4 256.3l5.8 65-5.8 68.3c-.3 2.5-2.2 4.4-4.4 4.4s-4.2-1.9-4.2-4.4l-5.6-68.3 5.6-65c0-2.2 1.9-4.2 4.2-4.2 2.2 0 4.1 2 4.4 4.2zm21.4-45.6c-2.8 0-4.7 2.2-5 5l-5 105.6 5 68.3c.3 2.8 2.2 5 5 5 2.5 0 4.7-2.2 4.7-5l5.8-68.3-5.8-105.6c0-2.8-2.2-5-4.7-5zm25.5-24.1c-3.1 0-5.3 2.2-5.6 5.3l-4.4 130 4.4 67.8c.3 3.1 2.5 5.3 5.6 5.3 2.8 0 5.3-2.2 5.3-5.3l5.3-67.8-5.3-130c0-3.1-2.5-5.3-5.3-5.3zM7.2 283.2c-1.4 0-2.2 1.1-2.5 2.5L0 321.3l4.7 35c.3 1.4 1.1 2.5 2.5 2.5s2.2-1.1 2.5-2.5l5.6-35-5.6-35.6c-.3-1.4-1.1-2.5-2.5-2.5zm23.6-21.9c-1.4 0-2.5 1.1-2.5 2.5l-6.4 57.5 6.4 56.1c0 1.7 1.1 2.8 2.5 2.8s2.5-1.1 2.8-2.5l7.2-56.4-7.2-57.5c-.3-1.4-1.4-2.5-2.8-2.5zm25.3-11.4c-1.7 0-3.1 1.4-3.3 3.3L47 321.3l5.8 65.8c.3 1.7 1.7 3.1 3.3 3.1 1.7 0 3.1-1.4 3.1-3.1l6.9-65.8-6.9-68.1c0-1.9-1.4-3.3-3.1-3.3zm25.3-2.2c-1.9 0-3.6 1.4-3.6 3.6l-5.8 70 5.8 67.8c0 2.2 1.7 3.6 3.6 3.6s3.6-1.4 3.9-3.6l6.4-67.8-6.4-70c-.3-2.2-2-3.6-3.9-3.6zm241.4-110.9c-1.1-.8-2.8-1.4-4.2-1.4-2.2 0-4.2.8-5.6 1.9-1.9 1.7-3.1 4.2-3.3 6.7v.8l-3.3 176.7 1.7 32.5 1.7 31.7c.3 4.7 4.2 8.6 8.9 8.6s8.6-3.9 8.6-8.6l3.9-64.2-3.9-177.5c-.4-3-2-5.8-4.5-7.2zm-26.7 15.3c-1.4-.8-2.8-1.4-4.4-1.4s-3.1.6-4.4 1.4c-2.2 1.4-3.6 3.9-3.6 6.7l-.3 1.7-2.8 160.8s0 .3 3.1 65.6v.3c0 1.7.6 3.3 1.7 4.7 1.7 1.9 3.9 3.1 6.4 3.1 2.2 0 4.2-1.1 5.6-2.5 1.7-1.4 2.5-3.3 2.5-5.6l.3-6.7 3.1-58.6-3.3-162.8c-.3-2.8-1.7-5.3-3.9-6.7zm-111.4 22.5c-3.1 0-5.8 2.8-5.8 6.1l-4.4 140.6 4.4 67.2c.3 3.3 2.8 5.8 5.8 5.8 3.3 0 5.8-2.5 6.1-5.8l5-67.2-5-140.6c-.2-3.3-2.7-6.1-6.1-6.1zm376.7 62.8c-10.8 0-21.1 2.2-30.6 6.1-6.4-70.8-65.8-126.4-138.3-126.4-17.8 0-35 3.3-50.3 9.4-6.1 2.2-7.8 4.4-7.8 9.2v249.7c0 5 3.9 8.6 8.6 9.2h218.3c43.3 0 78.6-35 78.6-78.3.1-43.6-35.2-78.9-78.5-78.9zm-296.7-60.3c-4.2 0-7.5 3.3-7.8 7.8l-3.3 136.7 3.3 65.6c.3 4.2 3.6 7.5 7.8 7.5 4.2 0 7.5-3.3 7.5-7.5l3.9-65.6-3.9-136.7c-.3-4.5-3.3-7.8-7.5-7.8zm-53.6-7.8c-3.3 0-6.4 3.1-6.4 6.7l-3.9 145.3 3.9 66.9c.3 3.6 3.1 6.4 6.4 6.4 3.6 0 6.4-2.8 6.7-6.4l4.4-66.9-4.4-145.3c-.3-3.6-3.1-6.7-6.7-6.7zm26.7 3.4c-3.9 0-6.9 3.1-6.9 6.9L227 321.3l3.9 66.4c.3 3.9 3.1 6.9 6.9 6.9s6.9-3.1 6.9-6.9l4.2-66.4-4.2-141.7c0-3.9-3-6.9-6.9-6.9z"
                              class=""></path>
                    </svg>
                    <p>Sound</p>
                    <a href="">OFF</a>
                </div>
                <div class="awwwards">
                    <a href=""></a>
                </div>
            </div>
            <div class="title">

                <div class="text">
                    <code class="tags top-tags"> &lt;h1&gt;</code>
                    <h1 class="head_text">
                        <p><span >H</span><span>i</span><span>,</span></p>
                        <p><span>I</span><span>'</span><span>m</span> <span class="back_V">V</span><span class="front_V">V</span><span>e</span><span>x</span></p>
                        <p><span>w</span><span>e</span><span>b</span>
                            <span>d</span><span>e</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>e</span><span>r</span>
                        </p>
                    </h1>
                    <code class="tags top-tags"> &lt;/h1&gt;</code>
                    <p>Front End Developer / WordPress Expert</p>
                </div>
                <button><span class="an"></span>
                    <p>Contact me!</p></button>
            </div>
            <code class="tags top-tags"> &lt;/body&gt;</code>
            <code class="tags top-tags"> &lt;/html&gt;</code>
        </div>
        <div class="portfolio">
            <div class="fake_big"><p>Work</p></div>
            <div class="text_zone">
                <div>
                    <h2>My Portfolio</h2>
                    <div class="desc">
                        <p> A small gallery of recent projects chosen by me.
                            I've done them all together with amazing people from companies<br>around the globe. It's
                            only a
                            drop in
                            the ocean compared to the entire list.<br>Interested to see some more? Visit <a href="">my
                                work</a> page.</p>
                    </div>
                </div>
                <div>
                    <button><span class="an"></span>
                        <p>See more!</p></button>
                </div>
            </div>
        </div>
        <div class="sites">
            <div class="portfolio_site">
                <ul>
                    {{--                <li>--}}
                    {{--                    <div><img src="{{asset("res/Silversurfer.png")}}" alt=""></div>--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <div><img src="{{asset("res/janeanson.png")}}" alt=""></div>--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/projectset.png")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/fluxposure.jpg")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/adrianflux.jpg")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/tte.png")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/bebrave.jpg")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/aspectproperty.jpg")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/unnamed.jpg")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                    {{--                <li>--}}
                    {{--                    <img src="{{asset("res/lucasbespoke.png")}}" alt="">--}}
                    {{--                    --}}{{--                    <a href="">VIEW PROJECT</a>--}}
                    {{--                </li>--}}
                </ul>
            </div>
        </div>
        <div class="myself">
            <div class="column">
                <div class="text">
                    <h2>
                        Me, Myself and I
                    </h2>
                    <p> Since Adobe Flash was a complete innovation, alongside with CSS 1.0 and HTML 4.01 as standards
                        of
                        the current web I've been passionate about web.</p>
                    <p> For over a decade I had many opportunities to work in a vast spectrum of <a href="">web<br>
                            technologies</a> what let me gather a significant amount of various experience.
                        Working for companies and individuals around the globe I met and learnt from amazing and
                        ambitious
                        people.
                    </p>
                    <p>
                        I currently work remotely with a selected freelance client base being open for new
                        opportunities.
                    </p>
                </div>
                <div class="skill">
                    <ul>
                        <li>Larabel</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>SQL</li>
                        <li>PHP</li>
                        <li>npm</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="fake_big"><p>Blog</p></div>
            <div class="card_list">
                <div class="card yellow">
                    <em> SQL & Databases</em>
                    <h4><a href="">How to Create a Database Using the MongoDB Atlas UI</a></h4>
                    <p>MongoDB has been at the forefront of application development for developers...</p>
                </div>
                <div class="card yellow">
                    <em> SQL & Databases</em>
                    <h4><a href="">Database Queries to One Table (Part 1)</a></h4>
                    <p>This is an excerpt from the Mondial database that is widely...</p>
                </div>
                <div class="card blue">
                    <em>Computer Science</em>
                    <h4><a href="">Algorithms and Data Structures (Part 1)</a></h4>
                    <p>For the last 20 years, Google has been the main search...</p>
                </div>
            </div>
            <div class="card_list">
                <div class="card red">
                    <em>Web Development</em>
                    <h4><a href="">Fundamentals of HTML5 and CSS3</a></h4>
                    <p>Hypertext markup language (HTML) structures documents such as web pages by...</p>
                </div>
                <div class="card red">
                    <em>Web Development</em>
                    <h4><a href="">Advanced Design Techniques</a></h4>
                    <p>As the internet becomes more widespread, the number and variety of...</p>
                </div>
                <div class="card orange">
                    <em>JavaScript</em>
                    <h4><a href="">React JS Questions & Answers (Part 1) 2021</a></h4>
                    <p>What is JSX? JSX is a superset of JavaScript that allows...</p>
                </div>
            </div>
            <div class="card_list">
                <div class="card orange">
                    <em>JavaScript</em>
                    <h4><a href="">Javascript Interview Questions & Answers (Part 1)</a></h4>
                    <p>What are the possible ways to create objects in JavaScript? There...</p>
                </div>
                <div class="card aqua">
                    <em>HTML & CSS</em>
                    <h4><a href="">Ultimate Guide to CSS Grid Layout (Part 1)</a></h4>
                    <p>Grid Container Grid Columns Grid Rows Grid Gaps CSS Grid...</p>
                </div>
                <div class="card aqua">
                    <em>HTML & CSS</em>
                    <h4><a href="">How to use System Fonts in CSS to improve your site?</a></h4>
                    <p>How to use System Fonts in CSS to improve your site...</p>
                </div>
            </div>
            <p class="blog_button"><a href="">See all articles...</a></p>
        </div>
        <div class="contact">
            <div class="fake_big"><p>@</p></div>
            <div class="column">
                <div class="text_zone">
                    <h2>Contact me</h2>
                    <p>I’m interested in freelance opportunities – especially ambitious or large projects. However, if
                        you have
                        other request or question, don’t hesitate to use the form.</p>
                    <div class="contact_form">
                        <form action="">
                            <ul>
                                <li class="half">
                                    <label>
                                        <span class="an"></span>
                                        <input type="text" placeholder="name">
                                    </label>
                                </li>
                                <li class="half">

                                    <label>
                                        <input type="text" placeholder="name">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="text" placeholder="name">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <textarea placeholder="name"></textarea>
                                    </label>
                                </li>
                            </ul>
                        </form>
                        <div>
                            <button><span class="an"></span>
                                <p>Send message!</p></button>
                        </div>
                    </div>
                </div>
                <div class="contact_map">
                    <div class="info"></div>
                    <img src="{{asset("res/map.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
{{--<button onclick="map(0)">Лево</button>--}}
{{--<button onclick="map(1)">Верх</button>--}}
{{--<button onclick="map(2)">Право</button>--}}
{{--<button onclick="map(3)">Низ</button>--}}
{{--<div class="img">--}}
{{--    <img src="{{asset("res/Raccoon_on_Log.jpg")}}" alt="" class="img_test">--}}
{{--</div>--}}
{{--<iframe src="https://ru.wikipedia.org/wiki/CUDA" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
<script src="{{asset("js/map.js")}}"></script>
</body>
</html>
