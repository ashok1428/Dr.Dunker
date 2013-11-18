<?php
/*
Template Name: Neupatient Page
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
    <div class="large-12 columns" >
        <hr />
        <h5>NEUPATIENTEN</h5>
        <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-neupatienten-banner',true); ?>" id="headerimg-neupatient" >

        <hr>
    </div>
</div>

<!-- 3 text blocks -->
<div class="row">
    <div class="large-4 columns">

        <p><?php
            echo get_post_meta(get_the_ID(),'wpcf-neupatienten-content1',true);

            ?></p>
    </div>

    <div class="large-4 columns">
        <p>
            <?php
            echo get_post_meta(get_the_ID(),'wpcf-neupatienten-content2',true);

            ?>
        </p>
    </div>

    <div class="large-4 columns">
        <p><?php
            echo get_post_meta(get_the_ID(),'wpcf-neupatienten-content3',true);

            ?></p>
    </div>

</div>



<!-- Three-up Content Blocks -->

<div class="row">
    <div class="large-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 77.png" />
    </div>

    <div class="large-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 78.png" />
    </div>

    <div class="large-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 79.png" />

    </div>
    <div class="large-12 columns" id="hrtag1">
        <hr />
    </div>

</div>
<!-- contact form -->
<div class="row">
    <div class="large-12 columns" >

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Aktion unten NL feld.png" id="contactheader1">

        <div class="large-12 columns" id="hrtag2">
            <hr />
        </div>
    </div>


    <div class="large-12 columns" >

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ebene 38 Kopie 10.png" id="contactheader2">
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
        <div class="large-12 columns" id="hrtag">
            <hr />
        </div>

    </div>



</div>
<?php get_footer(); ?>