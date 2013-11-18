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
    <?php  get_the_ID();

    $images=get_post_meta(get_the_ID(),'wpcf-team-slider');


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

    <!-- text with image -->

    <div class="row">

        <div class="large-4 columns" >


            <h4>This is a content section.</h4>
            <p>
            <h6><?php echo get_post_meta(get_the_ID(),'wpcf-team-member-name1',true) ?></h6>
            <?php echo get_post_meta(get_the_ID(),'wpcf-team-member-content1',true) ?></p>

        </div>

        <div class="large-8 columns" id="teamblock">
            <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-team-member-image1',true) ?>">
            <!-- <div id="slider">

            </div> -->

        </div>
    </div>
    <div class="row">

        <div class="large-4 columns" id="imgblock201">

            <h6><?php echo get_post_meta(get_the_ID(),'wpcf-team-member-name2',true) ?></h6>
            <?php echo get_post_meta(get_the_ID(),'wpcf-team-member-content2',true) ?></p>

        </div>

        <div class="large-8 columns" id="imgblock202">
            <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-team-member-image2',true) ?>">
            <!-- <div id="slider">

            </div> -->

        </div>
    </div>
    <div class="row">

        <div class="large-4 columns" id="imgblock203">

            <h6><?php echo get_post_meta(get_the_ID(),'wpcf-team-member-name3',true) ?></h6>
            <?php echo get_post_meta(get_the_ID(),'wpcf-team-member-content3',true) ?></p>

        </div>

        <div class="large-8 columns" id="imgblock204">
            <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-team-member-image3',true) ?>">
            <!-- <div id="slider">

            </div> -->

        </div>
        <hr />
    </div>
    <!-- text and slider -->

    <div class="row">
        <div class="large-8 columns">
            <?php

            $images=get_post_meta(get_the_ID(),'wpcf-team-small-slider');

            ?>
            <h5>This is a content section.</h5>
            <ul data-orbit>
                <?php foreach($images as $img): ?>
                    <li><img src="<?php echo $img; ?>" /></li>
                <?php endforeach; ?>
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