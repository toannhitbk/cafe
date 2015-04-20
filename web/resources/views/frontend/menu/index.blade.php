@extends('frontend.layouts')

@section('contents')
    <div class="bazingaThinColumnWider">
        <h1>Menu</h1>
        <div class="bazingaDivider"></div>
    </div>

    <br />
    
    <section class="menuSection">
        <h2>_COFFEE</h2>
        <article class="menuItem">
            <h3 class="id1">Americana small (150ml)</h3>
            <div class="menuItemDesc">coffee / cream / sugar / cinnamon</div>
            <div class="menuItemPrice">$3,50</div>
            <br/>
            <div id="myToggle" class="cap-overlay hide">
                <img src="/frontend/gallery/01-thumb.jpg" style="float: left"/>
                <div>
                    Name: cupcakes.png<br />
                    Photography: Ryun Shofner<br />
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $("#myToggle").hide();
                    $(".id1").mouseenter(function(){
                        $(".cap-overlay").fadeIn();
                    }).mouseleave(function(){
                        $(".cap-overlay").fadeOut();
                    });
                });
            </script>
            <div class="bazingaClear"></div>
        </article>
        <article class="menuItem">
            <h3>Americana large (250ml)</h3>
            <div class="menuItemDesc">coffee / cream / sugar / cinnamon / chilli</div>
            <div class="menuItemPrice">$5,50</div>
            <div class="bazingaClear"></div>
        </article>
        <article class="menuItem">
            <h3>Bazinga Coffee (500ml)</h3>
            <div class="menuItemDesc">coffee / dmt / <u>double cream</u> / shrooms / chilli</div>
            <div class="menuItemPrice">$9,50</div>
            <div class="bazingaClear"></div>
        </article>
        <article class="menuItem">
            <h3>Lounge cannabico (300ml)</h3>
            <div class="menuItemDesc">coffee / ganja / tripple bass / brown sugar</div>
            <div class="menuItemPrice">$9,50</div>
            <div class="bazingaClear"></div>
        </article>
    </section>

    <section class="menuSection">
        <h2>_CHOCOLATE</h2>
        <article class="menuItem">
            <h3>Darko (300ml)</h3>
            <div class="menuItemDesc">chocolate / bunnies / persian hash</div>
            <div class="menuItemPrice">$3,50</div>
            <div class="bazingaClear"></div>
        </article>
        <article class="menuItem">
            <h3>Absinthi (250ml)</h3>
            <div class="menuItemDesc">absinth / chocolate / double sugar</div>
            <div class="menuItemPrice">$5,50</div>
            <div class="bazingaClear"></div>
        </article>
        <article class="menuItem">
            <h3>Kemp (500ml)</h3>
            <div class="menuItemDesc">double dmt / <u>mushrooms</u> / cannabis / indian arrow</div>
            <div class="menuItemPrice">$9,50</div>
            <div class="bazingaClear"></div>
        </article>
        <article class="menuItem">
            <h3>I shot the sheriff (300ml)</h3>
            <div class="menuItemDesc">hashish / mistic aroma / god particle / chocolate</div>
            <div class="menuItemPrice">$9,50</div>
            <div class="bazingaClear"></div>
        </article>
    </section>
@stop

@section('image_backgrounds')
    {image : '/frontend/img/backgrounds/background_menu.jpg'}
@stop