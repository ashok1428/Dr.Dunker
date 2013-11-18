<?php
/*
Template Name: LEISTUNGEN Page
*/
get_header();

?>
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

<div class="row">
    <div class="large-12 columns">
        <hr />
        <h5>LEISTUNGEN</h5>
    </div>
</div>
<!-- Three block Content slider -->
<?php
$args = array(
    'posts_per_page'   => 3,
    'offset'           => 0,
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'post_type'        => 'leistungen-uberblick',
    'post_status'      => 'publish', );
$results = get_posts( $args );

?>


<div class="row">
    <?php
    $count=0;
    foreach($results as $res): ?>
    <div class="large-4 columns" >
        <div class="large-4 columns" id="blockhead<?php echo ++$count; ?>"> </div>
        <img src="<?php echo get_post_meta($res->ID,'wpcf-leistungen-uberblicks-image','true'); ?>" />
        <h6><?php echo $res->post_title; ?></h6>
        <p><?php echo $res->post_content; ?></p>

    </div>
   <?php endforeach; ?>

    <div class="large-12 columns" >
        <hr />
    </div>
</div>

<!-- Three block Content slider -->
<?php
$args = array(
    'posts_per_page'   => 3,
    'offset'           => 1,
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'post_type'        => 'leistungen-uberblick',
    'post_status'      => 'publish', );
$results = get_posts( $args );

?>
<div class="row">
    <?php
    //$count=0;
    foreach($results as $res): ?>
        <div class="large-4 columns" >
            <div class="large-4 columns" id="blockhead<?php echo ++$count; ?>"> </div>
            <img src="<?php echo get_post_meta($res->ID,'wpcf-leistungen-uberblicks-image','true'); ?>" />
            <h6><?php echo $res->post_title; ?></h6>
            <p><?php echo $res->post_content; ?></p>

        </div>
    <?php endforeach; ?>
    <div class="large-12 columns" >
        <hr />
    </div>
</div>
<?php
$args = array(
    'posts_per_page'   => 3,
    'offset'           => 3,
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'post_type'        => 'leistungen-uberblick',
    'post_status'      => 'publish', );
$results = get_posts( $args );

?>
<!-- Three block Content slider -->

<div class="row">
    <?php
    //$count=0;
    foreach($results as $res): ?>
        <div class="large-4 columns" >
            <div class="large-4 columns" id="blockhead<?php echo ++$count; ?>"> </div>
            <img src="<?php echo get_post_meta($res->ID,'wpcf-leistungen-uberblicks-image','true'); ?>" />
            <h6><?php echo $res->post_title; ?></h6>
            <p><?php echo $res->post_content; ?></p>

        </div>
    <?php endforeach; ?>
    <div class="large-12 columns" >
        <hr />
    </div>
</div>

<!-- text and image -->
<div class="row">

    <div class="large-4 columns">


        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

    </div>

    <div class="large-8 columns" id="borderimg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/side_img2.png">
        <!-- <div id="slider">

        </div> -->
    </div>
    <div class="large-12 columns" >
        <hr />
    </div>
</div>

<!-- image and text block -->

<div class="row">

    <div class="large-8 columns">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/side_img2.png">
        <!-- <div id="slider">

        </div> -->

    </div>

    <div class="large-4 columns">


        <h6>This is a content section.</h6>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

    </div>

</div>

<!-- 3 text blocks -->
<div class="row">
    <div class="large-4 columns">

        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="large-4 columns">
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

</div>

<?php
get_footer();
?>