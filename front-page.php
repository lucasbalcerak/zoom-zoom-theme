<?php 
 get_header();
 ?>
<div 
class="section-height big_picture flex-container"
style="background-image: url(<?php echo get_theme_file_uri('images/hero.jpg') ?>)">
    <div class="banner-text">
        <h1> Equine </h1>
        <h2> Animals </h2>
        <h3> People </h3>
        <h4> Nature </h4>
    </div>
</div>
<section class="section-height flex-container">
    <div class="container flex-container quote">
        <?php
            $qutePost = new WP_Query( array(
                'posts_per_page' => 1,
                'post_type' => 'cytat'
            ));
            while($qutePost->have_posts()) {
                $qutePost->the_post();
                echo get_the_content(); ?> 
                <span> <?php echo get_field('quote_author') ?> </span>
            <?php
            }
        wp_reset_postdata();    
        ?>
    </div>
</section>
<section 
class="big_picture offer-background flex-container"
style="background-image: url(<?php echo get_theme_file_uri('images/offer-background.jpg') ?>)">
    <div class="offer flex-container">
        <div class="offer-control-item">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="test">
        <?php
            $offerPost = new WP_Query( array(
                'post_per_page' => 1,
                'post_type' => 'oferta',
            ));
            while($offerPost->have_posts()) {
                $offerPost->the_post();
                ?>
                <div class="offer-box">
                    <h5>
                        <?php echo get_the_title(); ?>
                    </h5>
                        <?php echo get_the_content(); 
            }?>
                </div>
        </div>
        <div class="offer-control-item">
            <i class="fa-solid fa-chevron-right"></i>
        </div>    
    </div>
</section>
<section class="section-height gallery-section container">
    <div class="insta-info flex-container">
        <i class="fa-brands fa-instagram flex-item"></i>
        <p class="flex-item">
            zoom_zoom_photography
        </p>
    </div>
    <div class="gallery flex-container">
    <?php
        $galleryPost = new WP_Query( array(
            'post_per_page' => 4,
            'post_type' => 'zdjęcie'
        ));
        while($galleryPost->have_posts()) {
            $galleryPost->the_post();
            ?>
            <div 
                class="gallery-item" 
                style="background-image: url(<?php echo get_field('image') ?>">
            </div>
    <?php    
    }
    ?>       
    </div>
</section>
<?php
get_footer();
?>
