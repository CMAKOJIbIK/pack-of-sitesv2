<!doctype html>
<html lang="en">
<title>Contact</title>
@include("head")
<body>
@include("main_menu")
{{--@dd($themes[$theme])--}}
<div class="contact_{{$themes[$theme]->theme}}">
    <div class="contact_content">
        <div class="contact_form">
            <h2 class="head_text" style="-ms-user-select: none;
		-moz-user-select: none;
		-webkit-user-select: none;
		user-select: none;">
                <code class="tags top-tags"> &lt;h2&gt;</code>
                <p>
                    <em style="margin-left:0;"><span>V</span><span>r</span><span>i</span><span>t</span><span>e</span></em>
                    <em><span>t</span><span>o</span></em>
                    <em><span>a</span></em><em><span>V</span><span>e</span><span>x</span></em></p>
                <code class="tags top-tags"> &lt;/h2&gt;</code>
            </h2>
            <form action="{{route("message")}}" method="post">
                @csrf
                <ul style="-ms-user-select: none;
		-moz-user-select: none;
		-webkit-user-select: none;
		user-select: none;">
                    <li class="half" >
                        <label>
                            <span class="an"></span>
                            <input type="text" placeholder="name" name="name">
                        </label>
                    </li>
                    <li class="half">

                        <label>
                            <input type="text" placeholder="surname" name="surname">
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="text" placeholder="e-mail" name="gmail">
                        </label>
                    </li>
                    <li>
                        <label>
                            <textarea placeholder="message" name="message"></textarea>
                        </label>
                    </li>
                </ul>
                <div style="-ms-user-select: none;
		-moz-user-select: none;
		-webkit-user-select: none;
		user-select: none;">
                    <button><span class="an"></span>
                        <p>Send message!</p></button>
                </div>
            </form>

        </div>
        <div class="text_zone">
            <h2 class="head_text" style="-ms-user-select: none;
		-moz-user-select: none;
		-webkit-user-select: none;
		user-select: none;">
                <code class="tags top-tags"> &lt;h2&gt;</code>
                <p>
                    <em style="margin-left: 0"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></em>
                    <em><span>M</span><span>e</span></em></p>
                <code class="tags top-tags"> &lt;h2&gt;</code>
            </h2>
            <code class="tags top-tags"> &lt;p&gt;</code>
            <h4>If you need more information you can message me</h4>
            <code class="tags top-tags" style="margin-bottom: 10px"> &lt;/p&gt;</code>
            <div class="cards">
                <div class="card" style="margin-left: 0;">
                    <p>Im in:</p>
                    <em>Instagram: <a href="https://www.instagram.com/_vv3x_/">_vv3x_</a></em>
                    <em>Gmail: <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new">kvegrenovskiy@gmail.com</a></em>
                    <em>Telegram: <a href="https://t.me/DeveloperVV3X">@DeveloperV3X</a></em>
                    <em>Facebook: <a href="https://www.facebook.com/VEXdeveloper/">VEX</a></em>
                </div>
                <div class="card">
                    <p>My portfolio:</p>
                    <em>Freelance project: <a href="">freelancehunt</a></em>
                    <em><a href=""></a></em>
                    <em><a href=""></a></em>
                    <em><a href=""></a></em>
                </div>
            </div>

        </div>

    </div>
    {{--    <h1 id="score">0</h1>--}}

    {{--    <div class="grid"></div>--}}

</div>
{{--<script src="{{asset("js/breakout.js")}}"></script>--}}
<script src="{{asset("js/map.js")}}"></script>
</body>
</html>
