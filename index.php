
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="highlight.pack.js"></script>
<script type="text/javascript" src="jquery.cookie.js"></script>
<script type="text/javascript" src="jquery.accordion.js"></script>

</head>
<body>


<div class="accordion" id="section1">Overview</div>
<div class="container">
hiiiiiiiiiiiiiiiiii
</div>



<div class="accordion" id="section2">Add HTML</div>
<div class="container">
hiiiiiiiiiiiiii
</div>

<div class="accordion" id="section3">Add HTML</div>
<div class="container">
hiiiiiiiiiiiiii
</div>

<div class="accordion" id="section4">Add HTML</div>
<div class="container">
hiiiiiiiiiiiiii
</div>

<div class="accordion" id="section5">Add HTML</div>
<div class="container">

</div>

<script type="text/javascript">
    $(document).ready(function() {

        //syntax highlighter
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();

        $.fn.slideFadeToggle = function(speed, easing, callback) {
            return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
        };

        //accordion
        $('.accordion').accordion({
            defaultOpen: 'section1',
            cookieName: 'accordion_nav',
            speed: 'slow',
            animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            },
            animateClose: function (elem, opts) { //replace the standard slideDown with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }
        });

    });
</script>
</body>
</html>