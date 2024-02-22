<?php 
 get_header();
 ?>
<div 
class="page-banner big_picture flex-container"
style="background-image: url(<?php echo get_theme_file_uri('images/hero.jpg') ?>)">
    <div class="banner-text">
        <h1> Equine </h1>
        <h2> Animals </h2>
        <h3> People </h3>
        <h4> Nature </h4>
    </div>
</div>
<section class="quote-section flex-container">
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
            
        ?>
    </div>
</section>
<?php
get_footer();
?>
