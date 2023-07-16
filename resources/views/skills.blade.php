<!doctype html>
<html lang="en">
<title>Skills</title>
@include("head")
<body>
@include("main_menu")
{{--<div id="page-preloader" class="preloader">--}}
{{--    <p>Can You See What I Can</p>--}}
{{--    <div class="loader"></div>--}}
{{--</div>--}}

<div class="skills_{{$themes[$theme]->theme}}">
    <code class="tags top-tags"> &lt;body&gt;</code>
    <div class="skills_column">
        <div class="text_zone">

            <h2 class="head_text">
                <code class="tags top-tags"> &lt;h2&gt;</code>
                <p><span>S</span><span>k</span><span>i</span><span>l</span><span>l</span><span>s</span>
                    <span>&</span><br><span>E</span><span>x</span><span>p</span><span>e</span><span>r</span><span>i</span><span>e</span><span>n</span><span>c</span><span>e</span>
                </p>
                <code class="tags top-tags"> &lt;/h2&gt;</code>
            </h2>
            <code class="tags top-tags"> &lt;p&gt;</code>
            <p>Since beginning my journey as a freelance developer nearly 4 years ago, I’ve done remote work for
                agencies, consulted for startups, and collaborated with talented people to create web products for both
                business and consumer use.</p>
            <p>I create successful responsive websites that are fast, easy to use, and built with best practices. The
                main area of my expertise is front-end development, HTML, CSS, JS, building small and medium web apps,
                custom plugins, features, animations, and coding interactive layouts.</p>

            <p>Visit my <a href="">LinkedIn</a> profile for more details or just <a href="">contact me</a>.</p>
            <code class="tags top-tags"> &lt;/p&gt;</code>
        </div>
        <div class="skills_status">
            <div class="charts">
                <div class="chart first">
                    <div class="text">
                        <p>Front-end</p>
                        <em>0%</em>
                    </div>
                    <div class="underline"></div>
                </div>
                <div class="chart second">
                    <div class="text">
                        <p>AnimationJS</p>
                        <em>0%</em>
                    </div>
                    <div class="underline"></div>
                </div>
                <div class="chart third">
                    <div class="text">
                        <p>Back-end</p>
                        <em>0%</em>
                    </div>
                    <div class="underline"></div>
                </div>
                <div class="chart fourth">
                    <div class="text">
                        <p>Angular</p>
                        <em>0%</em>
                    </div>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="work_card">
                <div class="card first">
                    <h3>Frontend developer</h3>
                    <p>To The End</p>
                    <time>2020-202?</time>
                    <p class="desc">Award-winning Content Marketing Agency specialises in creating and sharing engaging content</p>
                </div>
                <div class="card second">
                    <h3>Full stack developer</h3>
                    <p></p>
                    <time></time>
                    <p class="desc"></p>
                </div>
            </div>
        </div>

    </div>
    <code class="tags top-tags"> &lt;/body&gt;</code>
</div>
<script src="{{asset("js/map.js")}}"></script>
</body>
</html>

