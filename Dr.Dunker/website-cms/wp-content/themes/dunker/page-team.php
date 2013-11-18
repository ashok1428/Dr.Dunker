<?php
/*
Template Name: Team Page
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
                <li><a href="index.html" class="button">Home</a></li>
                <li><a href="team.html" class="button">Team</a></li>
                <li><a href="neupatient.html" class="button">Neupatient</a></li>
                <li><a href="Leistungen.html" class="button">Leistungen</a></li>
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

    <!-- text with image -->

    <div class="row">

        <div class="large-4 columns" >


            <h4>This is a content section.</h4>
            <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

        </div>

        <div class="large-8 columns" id="teamblock">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/side_img2.png">
            <!-- <div id="slider">

            </div> -->

        </div>
    </div>
    <div class="row">

        <div class="large-4 columns" id="imgblock201">

            <p><h6>DR. MICHEAL DUNKER</h6>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

        </div>

        <div class="large-8 columns" id="imgblock202">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/side_img2.png">
            <!-- <div id="slider">

            </div> -->

        </div>
    </div>
    <div class="row">

        <div class="large-4 columns" id="imgblock203">

            <p><h6>DR. MICHEAL DUNKER</h6>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

        </div>

        <div class="large-8 columns" id="imgblock204">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/side_img2.png">
            <!-- <div id="slider">

            </div> -->

        </div>
        <hr />
    </div>
    <!-- text and slider -->

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
    </div>




    <!-- Three-up Content Blocks -->

    <div class="row">
        <div class="large-4 columns" id="imgblock11">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 77.png" />
        </div>

        <div class="large-4 columns" id="imgblock12">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 78.png" />
        </div>

        <div class="large-4 columns" id="imgblock13">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 79.png" />

        </div>
        <div class="large-12 columns">
            <hr />
        </div>

    </div>


<?php
get_footer();
?>