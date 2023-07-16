<!doctype html>
<html lang="en">
<title>Setting</title>
@include("head")
<body>
<div class="settings_vex">
{{--    {{$theme}}--}}
    <div class="settings_vex_content">
        <div class="left_column">
            <div class="text_zone">
                <h2 class="head_text">
                    <p>
                        <em><span>W</span><span>h</span><span>a</span><span>t</span></em><em><span>I</span></em><em><span>U</span><span>s</span><span>e</span></em>
                    </p>
                </h2>
                <div class="settings_vex_desc">
                    <p>Here is everything I used</p>
                    <p>The most popular colors on the site. Tags, etc</p>
                </div>
                <h3>Most popular code element</h3>
                <div class="tags_content">

                    <ul class="tag">
                        <h4>.HTML</h4>
                        <li><p><code class="tags top-tags">&lt;h1&gt;&lt;/h1&gt;</code></p><span
                                class="count">100 times</span></li>
                        <li><p><code class="tags top-tags">&lt;h2&gt;&lt;/h2&gt;</code></p><span
                                class="count">100 times</span></li>
                        <li><p><code class="tags top-tags">&lt;p&gt;&lt;/p&gt;</code></p><span
                                class="count">100 times</span></li>
                        <li><p><code class="tags top-tags">&lt;em&gt;&lt;/em&gt;</code></p><span
                                class="count">100 times</span></li>
                        <li><p><code class="tags top-tags">&lt;div&gt;&lt;/div&gt;</code></p><span class="count">100 times</span>
                        </li>
                    </ul>
                    <ul class="sizes">
                        <h4>.Scss</h4>
                        <li><p>width:</p><em><p class="number_color">100</p>
                                <p>%</p></em>
                            <p>;</p><span class="count"></span></li>
                        <li><p>height:</p><em><p class="number_color">100</p>
                                <p class="text_color">vh</p></em>
                            <p>;</p><span class="count"></span></li>
                        <li><p>font-size:</p><em><p class="number_color">73</p>
                                <p class="text_color">px</p></em>
                            <p>;</p><span class="count"></span></li>
                        <li><p>padding:</p><em><p class="number_color">90</p>
                                <p class="text_color">px</p>
                                <p class="number_color">30</p>
                                <p class="text_color">px</p></em>
                            <p>;</p><span class="count"></span></li>
                        <li><p>background:</p><em><p class="number_color">#1d1d1d1d</p>
                                <p class="text_color"></p></em>
                            <p>;</p><span class="count"></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right_column">
            <h3>Themes</h3>
            <div class="colors">

                <div class="cards">
                    @foreach($themes as $item)
                        <?php
                        $class = "";
                        if ($theme == $item->id-1) {
                            $class = "active";
                        }
                        ?>
                        <a class="card select_{{$item->theme}}" href="{{route("theme_" . $item->id)}}">
                            <p>{{$item->name}}</p>
                            <em class="anim @if($class)
                                active
                    @endif"></em>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        {{--            <div class="style_vex">--}}
        {{--                <div class="cards">--}}
        {{--                    <div class="card">--}}
        {{--                        <img src="" alt="">--}}
        {{--                    </div>--}}
        {{--                    <div class="card">--}}
        {{--                        <img src="" alt="">--}}
        {{--                    </div>--}}
        {{--                    <div class="card">--}}
        {{--                        <img src="" alt="">--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </div>
</div>
</div>
<script src="{{asset("js/map.js")}}"></script>

</body>
</html>
