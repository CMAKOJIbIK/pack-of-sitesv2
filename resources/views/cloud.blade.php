<div class="content">
    <!-- content -->
</div>
<script type="text/javascript" src="{{asset("library/TagCloud-master/dist/TagCloud.min.js")}}"></script>
<script>
    var texts = [
        'PHP', 'JavaScript',
        'CSS3', 'Larabel', 'Front-end',
        'CSS2', 'LUA', 'C++', 'Python',
        'UE4','WebDesign','Java','SCSS','Git',
        'Back-end',

    ];
    var tc = TagCloud('.content', texts);
    console.log(tc);
</script>
<script>
    var otherTcs = [];
    // create and destroy tagcloud
    function toCreate() {
        if (otherTcs.length >= 3) return;
        otherTcs.push(TagCloud('.content', texts));
    }

    // pause and resume tagcloud animation


    // add and remove clickEvent
    function clickEventHandler(e) {
        if (e.target.className === 'tagcloud--item') {
            window.open(`https://www.google.com/search?q=${e.target.innerText}`, '_blank');
        }
    }
    function addClickEvent() {
        var rootEl = document.querySelector('.content');
        rootEl.addEventListener('click', clickEventHandler);
    }
    function removeClickEvent() {
        var rootEl = document.querySelector('.content');
        rootEl.removeEventListener('click', clickEventHandler);
    }
</script>

