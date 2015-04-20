@extends('frontend.layouts')
@section('css_fancyboxs')
    <link rel="stylesheet" href="/frontend/js/mylibs/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
@stop
@section('contents')

                <div class="bazingaThinColumnWidestPlus">
                    <h1>GALLERY</h1>
                    <div class="bazingaDivider"></div>
                </div>
                <br />

                <section id="bazingaGallery">
                    <ul>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/01-big.jpg"><img src="/frontend/gallery/01-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/02-big.jpg"><img src="/frontend/gallery/02-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/03-big.jpg"><img src="/frontend/gallery/03-thumb.jpg"></a></li>
                        <li class="lastInRow"><a class="fancybox" rel="galeria" href="/frontend/gallery/04-big.jpg"><img src="/frontend/gallery/04-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/03-big.jpg"><img src="/frontend/gallery/03-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/04-big.jpg"><img src="/frontend/gallery/04-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/01-big.jpg"><img src="/frontend/gallery/01-thumb.jpg"></a></li>
                        <li class="lastInRow"><a class="fancybox" rel="galeria" href="/frontend/gallery/02-big.jpg"><img src="/frontend/gallery/02-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/01-big.jpg"><img src="/frontend/gallery/01-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/02-big.jpg"><img src="/frontend/gallery/02-thumb.jpg"></a></li>
                        <li><a class="fancybox" rel="galeria" href="/frontend/gallery/03-big.jpg"><img src="/frontend/gallery/03-thumb.jpg"></a></li>
                        <li class="lastInRow"><a class="fancybox" rel="galeria" href="/frontend/gallery/04-big.jpg"><img src="/frontend/gallery/04-thumb.jpg"></a></li>
                    </ul>
                </section>

@stop
@section('fancyboxs')
    <script type="text/javascript" src="/frontend/js/mylibs/fancybox/jquery.easing-1.3.pack.js"></script>
    <script type="text/javascript" src="/frontend/js/mylibs/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
@stop
@section('image_backgrounds')
    {image : '/frontend/img/backgrounds/background_menu.jpg'}
@stop
@section('script_fancyboxs')
    $(window).load(function() {
    $("a.fancybox").fancybox({
    'transitionIn'	:	'elastic',
    'transitionOut'	:	'elastic',
    'speedIn'		:	600,
    'speedOut'		:	200,
    'overlayShow'	:	false
    });

    });
@stop