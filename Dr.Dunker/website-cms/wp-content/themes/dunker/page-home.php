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
<?php  get_the_ID();

$images=get_post_meta(get_the_ID(),'wpcf-home-page-main-slider');


?>
<div class="row">
    <div class="large-12 columns">
        <ul data-orbit>
            <?php foreach($images as $img): ?>
            <li><img src="<?php echo $img; ?>" /></li>
            <?php endforeach; ?>
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
    <div class="large-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-block-img.png" id="imgblock4"/>
    </div>

    <div class="large-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/middle-block-img.png" id="imgblock5"/>
    </div>

    <div class="large-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right-block-img.png" id="imgblock6"/>
    </div>
    <div class="large-12 columns" id="hrtag1">
        <hr />
    </div>

</div>

<div class="row">
    <div class="large-4 columns">
        <h6>This is a content section.</h6>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <h6>This is a content section.</h6>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <h6>This is a content section.</h6>
        <p>Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/anfahrtsbild - Karte.png">
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

<div class="row">
    <ul id="mycarousel" class="jcarousel-skin-tango">
        <li><div class="large-4 columns" id="block_heading">
                <div class="large-4 columns" id="blockheading1"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div>
        </li>
        <li><div class="large-4 columns" id="block_heading1">
                <div class="large-4 columns" id="blockheading2"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading2">
                <div class="large-4 columns" id="blockheading3"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading3" >
                <div class="large-4 columns" id="blockheading4"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading4">
                <div class="large-4 columns" id="blockheading5"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading5">
                <div class="large-4 columns" id="blockheading6"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading6">
                <div class="large-4 columns" id="blockheading7"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading7">
                <div class="large-4 columns" id="blockheading8"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>
        <li><div class="large-4 columns" id="block_heading8" >
                <div class="large-4 columns" id="blockheading9"> </div>
                <img src="http://placehold.it/400x300&text=[img]" />
                <h6>This is a content section.</h6>
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

            </div></li>

    </ul>
    <hr />
</div>
<?php get_footer(); ?>