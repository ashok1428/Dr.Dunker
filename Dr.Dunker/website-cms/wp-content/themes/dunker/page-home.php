<?php
/*
Template Name: Home Page
*/
get_header();
?>
<body>
<!-- Requires Foundation 4 | visit http://foundation.zurb.com to download -->

<!-- Header and Nav -->
<div class="row">
    <div class="large-3 columns">
        <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" /></h1>
    </div>
    <div class="large-9 columns">
        <ul class="right button-group">
            <li><a href="index.html" class="button">HOME</a></li>
            <li><a href="team.html" class="button">TEAM</a></li>
            <li><a href="neupatient.html" class="button">NEUPATIENT</a></li>
            <li><a href="Leistungen.html" class="button">LEISTUNGEN</a></li>
            <li><a href="contact.html" class="button">SPRECHZEITEN/KONTAKT</a></li>
        </ul>
    </div>
</div>

<!-- End Header and Nav -->

<!-- First Band (Slider) -->

<div class="row">
    <div class="large-12 columns">
        <ul data-orbit>
            <li><img src="http://placehold.it/1000x400&text=[ img 1 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 2 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 3 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 4 ]" /></li>
        </ul>
        <!-- <div id="slider">

        </div> -->

        <hr />
    </div>
</div>

<!-- text with image -->

<div class="row">

    <div class="large-4 columns">

        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

    </div>
    <div class="large-8 columns" >
    </div>
    <div class="large-8 columns" id="scr1">
        <ul data-orbit>
            <li><img src="http://placehold.it/1000x400&text=[ img 1 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 2 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 3 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 4 ]" /></li>
        </ul>
        <!-- <div id="slider">

        </div> -->

    </div>

</div>






<!-- Three-up Content Blocks -->

<div class="row">

    <div class="large-4 columns" id="imgblock">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-block-img.png" />
    </div>

    <div class="large-4 columns" id="imgblock">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/middle-block-img.png" />
    </div>

    <div class="large-4 columns" id="imgblock">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right-block-img.png" />

    </div>

    <div class="large-12 columns" >
        <hr />
    </div>
</div>

<!-- text2 and content2 -->

<div class="row">

    <div class="large-4 columns">
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

    </div>

    <div class="large-8 columns" id="scr2">
        <ul data-orbit>
            <li><img src="http://placehold.it/1000x400&text=[ img 1 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 2 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 3 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 4 ]" /></li>
        </ul>
        <!-- <div id="slider">

        </div> -->
    </div>
    <div class="large-12 columns" >
        <hr />
    </div>
</div>

<div class="row">
    <div class="large-8 columns">
        <h5>This is a content section.</h5>
        <ul data-orbit>
            <li><img src="http://placehold.it/1000x400&text=[ img 1 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 2 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 3 ]" /></li>
            <li><img src="http://placehold.it/1000x400&text=[ img 4 ]" /></li>
        </ul>
        <!-- <div id="slider">

        </div> -->

    </div>
    <div class="large-4 columns"  id="scr3" >

        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

    </div>
    <div class="large-12 columns" >
        <hr />
    </div>
</div>
<!-- Three block Content slider heading -->
<div class="row">
    <div class="large-12 columns">
        <h6>This is a content section.</h6>

    </div>

</div>

<!-- Three block Content slider -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/skin.css" />
</div>
<div class="row">
    <ul id="mycarousel" class="jcarousel-skin-tango">
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div>
        </li>
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading" >
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="blockheading" >
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>

    </ul>
    <hr />
</div>

<!-- Call to Action Panel
<div class="row">
    <div class="large-12 columns">

      <div class="panel">
        <h4>Get in touch!</h4>

        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to hear from you, you attractive person you.</p>
          </div>
          <div class="large-3 columns">
            <a href="#" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>

    </div>
  </div> -->




<script>
    document.write('<script src=' +
        ('__proto__' in {} ? '<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/zepto' : '<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery') +
        '.js><\/script>')
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation.min.js"></script>
<!--

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.alerts.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.clearing.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.cookie.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.dropdown.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.forms.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.joyride.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.magellan.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.orbit.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.reveal.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.section.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.tooltips.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.interchange.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.placeholder.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation/foundation.abide.js"></script>



-->

<script>
    $(document).foundation();
</script>
<footer class="row" >
    <div class="large-12 columns" >
        <hr />
        <div class="large-12 columns">
            <p>
            <ul class="inline-list left">
                <li><a href="#">HOME  | </a></li>
                <li><a href="#">TEAM |</a></li>
                <li><a href="#">NEUPATIENT  |</a></li>
                <li><a href="#">LEISTUNGEN  |</a></li>
                <li><a href="#">KONTAKT</a></li>
            </ul>
            </p>
        </div>
    </div>
    <div class="large-12 columns" >
        <p align="left" style="font-size:12px">&copy; 2013 zahnarztpraxis Dunker&amp;Partner. All Rights Reserved</p>
    </div>
    </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
    var jQ=jQuery.noConflict();
    jQ(document).ready(function(){

    });
    jQ('#mycarousel').jcarousel();
</script>
<!-- Footer -->
</body>



</html>
