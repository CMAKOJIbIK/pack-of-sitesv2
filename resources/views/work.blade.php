<!doctype html>
<html lang="en">

<title>Work</title>
@include("head")
<body>
@include("main_menu")
<div class="work_{{$themes[$theme]->theme}}">
    <img src="{{asset("res/Osen.png")}}" alt="">
    <div class="work_content">
        <div class="text_zone">
            <h2 class="head_text">
                <code class="tags top-tags"> &lt;h2&gt;</code>
                <p><em><span>W</span><span>o</span><span>r</span><span>k</span></em>
                    <em><span>,</span></em><em><span>S</span><span>c</span><span>h</span><span>e</span><span>d</span><span>u</span><span>l</span><span>e</span></em>
                </p>
                <code class="tags top-tags"> &lt;/h2&gt;</code>
            </h2>
            <div class="more_works">
                <div class="text">
                    <code class="tags top-tags"> &lt;p&gt;</code>
                    <p>I am currently studying. My productivity drops because of it. You can view my monthly schedule</p>
                    <p>Depending on employment, I take different payments</p>
                    <p>If you have any questions, <a href="{{asset("contact")}}">contact</a> me</p>
                    <code class="tags top-tags"> &lt;/p&gt;</code>
                </div>
                <div>
                    <button><span class="an"></span>
                        <p><a href="">More Work!</a></p></button>
                </div>
            </div>
            <div class="instrument">
                <h3>Filter</h3>
                <ul>
                    <li><div class="around"></div><p>- very busy</p></li>
                    <li><div class="triangle"></div><p>- not very busy</p></li>
                    <li><div class="square"></div><p>- free</p></li>
                </ul>
            </div>
        </div>
        <div class="season">
            <div class="cards">
                <div class="column">
                    <div class="card autumn" style="margin-left: 0;">
                        <img src="{{asset("res/autumn.png")}}" alt="">
                        <h4>Autumn</h4>
                        <ul>
                            <li class="season_around"><p>September:</p><div class="around"></div></li>
                            <li class="season_around"><p>October:</p><div class="around"></div></li>
                            <li class="season_triangle"><p>November:</p><div class="triangle" style="background: none"></div></li>
                        </ul>
                    </div>
                    <div class="card winter">
                        <img src="{{asset("res/winter.png")}}" alt="">
                        <h4>Winter</h4>
                        <ul>
                            <li><p>December:</p><div class="around"></div></li>
                            <li><p>January:</p><div class="square"></div></li>
                            <li><p>February:</p><div class="triangle" style="background: none"></div></li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="card spring" style="margin-left: 0;">
                        <img src="{{asset("res/spring.png")}}" alt="">
                        <h4>Spring</h4>
                        <ul>
                            <li><p>March:</p><div class="around"></div></li>
                            <li><p>April:</p><div class="triangle" style="background: none"></div></li>
                            <li><p>May:</p><div class="square"></div></li>
                        </ul>
                    </div>
                    <div class="card summer">
                        <img src="{{asset("res/summer.png")}}" alt="">
                        <h4>Summer</h4>
                        <ul>
                            <li><p>June:</p><div class="square"></div></li>
                            <li><p>July:</p><div class="square"></div></li>
                            <li><p>August:</p><div class="square"></div></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="{{asset("js/map.js")}}"></script>
</body>
</html>
