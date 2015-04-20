<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Cafe ToanNH</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSS concatenated and minified via ant build script-->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/supersized.css" media="screen" />
    <link rel="stylesheet" href="/frontend/css/jquery.jscrollpane.css" media="screen" />
    <!-- end CSS-->
    <!-- add css fancyboxs-->
    @yield('css_fancyboxs')

    <script src="/frontend/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

<div id="container">
    <div id="main" role="main">
        <div id="bazingaContent">
            <div id="bazingaContentInner">
                 @yield('contents')
            </div><!--bazingaContentInner-->
        </div>
    </div>

</div> <!--! end of #container -->

<nav id="bazingaMenuContainer">
    <div class="bazingaMake990">
        <div id="bazingaLogoContainer">
            <div id="bazingaLogo"><a href="http://www.bazingadesigns.com/en" title="Template by Bazinga Designs - www.bazingadesigns.com">www.bazingadesigns.com/en</a></div>
        </div>

        <ul id="bazingaMenu">
            <li class="first active"><a href="{{route('home')}}" title="Cafe">kawiarnia</a></li>
            <li class="second"><a href="{{route('menu')}}" title="Menu">menu</a></li>
            <li class="third"><a href="{{route('gallery')}}" title="Gallery">galeria</a></li>
            <li class="fourth"><a href="{{route('contact')}}" title="Contact">kontakt</a></li>
        </ul>

        <div class="bazingaClear"></div>
        <footer>
            Copyright (C) Your Company Name |
            Template design: <a href="http://www.bazingadesigns.com/en" title="Bazinga Designs - Web Design London">www.bazingadesigns.com</a> + YOU
        </footer>
    </div>
</nav>

<script src="/frontend/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/frontend/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<script type="text/javascript" src="/frontend/js/mylibs/supersized.3.1.3.min.js"></script>
<script type="text/javascript" src="/frontend/js/mylibs/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/frontend/js/mylibs/mwheelIntent.js"></script>
<script type="text/javascript" src="/frontend/js/mylibs/jquery.jscrollpane3.min.js"></script>


<script type="text/javascript" src="/frontend/js/jquery.hcaptions.js"></script>
<!-- scripts fancyboxs-->
@yield('fancyboxs')

<!-- scripts concatenated and minified via ant build script-->
<script defer src="/frontend/js/plugins.js"></script>
<script defer src="/frontend/js/script.js"></script>
<script type="text/javascript">

    jQuery(function($){

        $.supersized({

            //Functionality

            slideshow               :   1,		//Slideshow on/off
            autoplay				:	1,		//Slideshow starts playing automatically
            start_slide             :   1,		//Start slide (0 is random)
            random					: 	0,		//Randomize slide order (Ignores start slide)
            slide_interval          :   5600,	//Length between transitions
            transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	1200,	//Speed of transition
            new_window				:	1,		//Image links open in new window/tab
            pause_hover             :   0,		//Pause slideshow on hover
            keyboard_nav            :   0,		//Keyboard navigation on/off
            performance				:	3,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect			:	0,		//Disables image dragging and right click with Javascript
            image_path				:	'../img/', //Default image path

            //Size & Position
            min_width		        :   0,		//Min width allowed (in pixels)
            min_height		        :   0,		//Min height allowed (in pixels)
            vertical_center         :   1,		//Vertically center background
            horizontal_center       :   1,		//Horizontally center background
            fit_always				:	1,
            //Components
            navigation              :   0,		//Slideshow controls on/off
            thumbnail_navigation    :   0,		//Thumbnail navigation
            slide_counter           :   0,		//Display slide numbers
            slide_captions          :   0,		//Slide caption (Pull from "title" in slides array)
            slides 					:  	[		//Slideshow Images

                @yield('image_backgrounds')

            ]

        });
        @yield('script_fancyboxs')

    });

</script>
<!-- end scripts-->


<script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
        load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
</script>


<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

</body>
</html>
