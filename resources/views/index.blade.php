<!doctype html>
<html lang="en">
<title>Home</title>
@include("head")
<body>
<div id="page-preloader" class="preloader">
    <p>Can You See What I Can</p>
    <div class="loader"></div>
</div>
{{--@dd($themes)--}}
{{--@include('cursor_anim')--}}
@include("main_menu")
{{--@dd($themes[$theme])--}}
<div class="{{$themes[$theme]->theme}}">
{{--    <div class="vex">--}}

    <div class="home">
        <div class="greeting">
            @include('cursor_anim')
            {{--    <pre><h1></h1></pre>--}}
            <code class="tags top-tags"> &lt;html&gt;</code>
            <code class="tags top-tags"> &lt;body&gt;</code>
            <div class="setting">

                <div class="settings">
                    <a href="{{asset("settings")}}"><img src="{{asset("res/settings.png")}}" alt=""></a>
                </div>
            </div>
            <div class="title">

                <div class="text">
                    <code class="tags top-tags"> &lt;h1&gt;</code>
                    <h1 class="head_text">
                        <p class="first_p"><span>H</span><span>i</span><span>,</span></p>
                        <p class="second_p"><span>I</span><span>'</span><span>m</span> <em class="back_V">V</em><em
                                class="front_V">V</em><span>e</span><span>x</span></p>
                        <p class="third_p"><span>w</span><span>e</span><span>b</span>
                            <span>d</span><span>e</span><span>v</span><span>e</span><span>l</span><span>o</span><span>p</span><span>e</span><span>r</span>
                        </p>
                    </h1>
                    <code class="tags top-tags"> &lt;/h1&gt;</code>
                    <p>Front End Developer / WordPress Expert</p>
                </div>
                <a href="{{asset("contact")}}">
                    <button><span class="an"></span>
                        <p>Contact me!</p></button>
                </a>

            </div>

        </div>
        <div class="portfolio">
            <div class="fake_big"><p>Work</p></div>
            <div class="text_zone">
                <div>
                    <h2 class="head_text">
                        <code class="tags top-tags"> &lt;h2&gt;</code>
                        <p><span>M</span><span>y</span>
                            <span>P</span><span>o</span><span>r</span><span>t</span><span>f</span><span>o</span><span>l</span><span>i</span><span>o</span>
                        </p>
                        <code class="tags top-tags"> &lt;/h2&gt;</code></h2>
                    <div class="desc">
                        <code class="tags top-tags"> &lt;p&gt;</code>
                        <p> A small gallery of recent projects chosen by me.
                            I've done them all together with amazing people from companies<br>around the globe. It's
                            only a
                            drop in
                            the ocean compared to the entire list.<br>Interested to see some more? Visit <a href="{{asset("work")}}">my
                                work</a> page.</p>
                        <code class="tags top-tags"> &lt;p&gt;</code>
                    </div>
                </div>
                <a href="{{asset("about")}}">
                    <button><span class="an"></span>
                        <p>See more!</p></button>
                </a>
            </div>
        </div>
        <div class="myself">
            <div class="column">
                <div class="text">
                    <h2 class="head_text">
                        <code class="tags top-tags"> &lt;h2&gt;</code>
                        <p><span>M</span><span>e</span><span>,</span>
                            <span>M</span><span>y</span><span>s</span><span>e</span><span>l</span><span>f</span>
                            <span>a</span><span>n</span><span>d</span> <span>I</span></p>
                        <code class="tags top-tags"> &lt;/h2&gt;</code>
                    </h2>
                    <code class="tags top-tags"> &lt;p&gt;</code>
                    <p class="desc_myself"> Since Adobe Flash was a complete innovation, alongside with CSS 1.0 and HTML 4.01 as standards
                        of
                        the current web I've been passionate about web.</p>
                    <p class="desc_myself"> For over a decade I had many opportunities to work in a vast spectrum of <a href="">web<br>
                            technologies</a> what let me gather a significant amount of various experience.
                        Working for companies and individuals around the globe I met and learnt from amazing and
                        ambitious
                        people.
                    </p>
                    <p class="desc_myself">
                        I currently work remotely with a selected freelance client base being open for new
                        opportunities.
                    </p>
                    <code class="tags top-tags"> &lt;/p&gt;</code>
                </div>
                <div class="skill">
                    @include("cloud")
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
{{--            <p class="blog_button"><a href="">See all articles...</a></p>--}}
        </div>
        <div class="contact">
            <div class="fake_big"><p>@</p></div>
            <div class="column">
                <div class="text_zone">
                    <h2 class="head_text">
                        <code class="tags top-tags"> &lt;h2&gt;</code>
                        <p><em style="margin-left: 0;"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></em>
                            <em><span>m</span> <span>e</span></em></p>
                        <code class="tags top-tags"> &lt;/h2&gt;</code></h2>
                    <code class="tags top-tags" style="margin-top: 15px;"> &lt;p&gt;</code>
                    <p class="desc_contact">I’m interested in freelance opportunities – especially ambitious or large projects. However, if
                        you have
                        other request or question, don’t hesitate to use the form.</p>
                    <code class="tags top-tags" style="margin-bottom: 15px;"> &lt;/p&gt;</code>
                    <div class="contact_form">
                        <form action="">
                            <ul>
                                <li class="half">
                                    <label>
                                        <span class="an"></span>
                                        <input type="text" placeholder="Name">
                                    </label>
                                </li>
                                <li class="half">

                                    <label>
                                        <input type="text" placeholder="Surname">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="text" placeholder="G-mail">
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <textarea placeholder="Message"></textarea>
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
                    <img src="{{asset("res/simple_map.png")}}" alt="">
                </div>
            </div>
            <div class="code">
                <code class="tags top-tags"> &lt;/body&gt;</code>
                <code class="tags top-tags"> &lt;/html&gt;</code>
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
<script src="{{asset("js/cursor_anim.js")}}"></script>
</body>
</html>
