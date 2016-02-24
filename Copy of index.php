
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<body>

<div id="body">
<!-- panel -->
<div class="accordion" id="section1">Overview<span></span></div>
<div class="container">
    <div class="content">
        <p>
            This plugin enables an accordion that can use cookies to persist between pages or visits.
            This plugin was made with the jQuery 1.10.1.
        </p>
        <p>
            If you find any errors or have suggested changes, please post an issue on the
            github project: <a href="http://github.com/juven14/Accordion" title="jQuery Accordion">http://github.com/juven14/Accordion</a>
        </p>
    </div>
</div>

<div class="accordion" id="section2">Add HTML<span></span></div>
<div class="container">
    <div class="content">
        <p>
            You need to add two parts, a header and a container.  The header div is for the label and the open/close
            text/images.  The container will hold any html/text you want to slide up/down.
        </p>

    </div>
</div>

<div class="accordion" id="section3">Add the Javascript<span></span></div>
<div class="container">
    <div class="content">
        <p>
            Add in the javascript:
        </p>

    </div>
</div>

<div class="accordion" id="section4">Default Options<span></span></div>
<div class="container">
    <div class="content">
        <p>The plugin default options are as follows:</p>

        <div>Details</div>
        <ul>
            <li>cssClose - class assigned when closed</li>
            <li>cssOpen - class assigned when opened</li>
            <li>cookieName - cookie name for persisting the opened panel</li>
            <li>cookieOptions - see jquery.cookie plugin for more info</li>
            <li>defaultOpen - id that you want opened by default</li>
            <li>speed - animation speed</li>
            <li>bind - event that triggers the collapsible, only 4 are supported: click, dblclick, mouseenter, and
                mouseover</li>
            <li>animateOpen - custom callback to animate opening</li>
            <li>animateClose - custom callback to animate closing</li>
            <li>loadOpen - custom callback to animate default opening</li>
            <li>loadClose - custom callback to animate default closing</li>
        </ul>
    </div>
</div>

<div class="accordion" id="section6">Custom CSS<span></span></div>
<div class="container">
    <div class="content">
        <p>
            In the above header example HTML you will see an empty span, this is useful if you wish to
            assign an open/close image.
        </p>
        <p>
            This plugin will append a user defined (or default, see options above) class to
            header of the accordion.  You can use this to swap out the images or style
            the different states of your accordion.
        </p>

    </div>
</div>

<div class="accordion" id="section7">Custom Javascript<span></span></div>
<div class="container">
    <div class="content">
        <p>You can additionally add in custom animation functions such as below:</p>

    </div>
</div>

<div class="accordion" id="section8">Demo CSS<span></span></div>
<div class="container">
    <div class="content">

    </div>
</div>
<!-- end panel -->
</div>
<script type="text/javascript" src="http://www.snyderplace.com/demos/javascript/jquery.min.js"></script>
<script type="text/javascript" src="http://www.snyderplace.com/demos/javascript/highlight.pack.js"></script>
<script type="text/javascript" src="http://www.snyderplace.com/demos/javascript/jquery.cookie.js"></script>
<script type="text/javascript" src="http://www.snyderplace.com/demos/javascript/jquery.accordion.js"></script>
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