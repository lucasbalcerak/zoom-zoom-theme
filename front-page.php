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
        <div class="slide-track flex-container">
            <?php
            $galleryPost = new WP_Query( array(
            'post_per_page' => 10,
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
            while($galleryPost->have_posts()) {
            $galleryPost->the_post();
            ?>
            <div 
                class="gallery-item" 
                style="background-image: url(<?php echo get_field('image') ?>">
            </div>
    <?php 
    }
    wp_reset_postdata()
    ?>
        </div>       
    </div>
</section>
<section class="section-height flex-container">
    <div class="container flex-container quote">
        <?php
            $qutePost = new WP_Query( array(
                'posts_per_page' => 1,
                'post_type' => 'cytat',
                'p' => 28
            ));
            while($qutePost->have_posts()) {
                $qutePost->the_post();
                echo get_the_content(); ?> 
            <?php
            }
        wp_reset_postdata();    
        ?>
    </div>
</section>
<section 
    class="section-height big_picture flex-container"
    style="background-image: url(<?php echo get_theme_file_uri('images/calendar-background.jpg') ?>)">
    <div class="calendar flex-container">
        <h5>tutaj będę robić zdjęcia</h5>
    <div class="events flex-container-column">
        <?php
            $today = date('Ymd');
            $calendarPost = new WP_Query( array(
                'posts_per_page' => 3,
                'post_type' => 'kalendarz',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array (
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

            while($calendarPost->have_posts()) {
                $calendarPost->the_post();
                ?>
                <div class="event flex-container">
                    <p class="date"><?php
                        $locale = 'pl_PL';
                        $timezone = new DateTimeZone('Europe/Warsaw');

                        $formatter = new IntlDateFormatter(
                            $locale,
                            IntlDateFormatter::LONG,
                            IntlDateFormatter::NONE,
                            $timezone,
                            IntlDateFormatter::GREGORIAN,
                            'd MMMM'
                        );
                        $dataObject = DateTime::createFromFormat('d/m/Y', get_field('event_date'));
                        $formated_data = $formatter->format($dataObject);
                        echo $formated_data;
                        ?></p>
                    <p class="name"><?php echo get_the_title() ?></p>
                </div>
                <?php
            }
            wp_reset_postdata()
            ?>
        </div>
    </div>
</section>
<section
    class="flex-container">
    <div class="faq flex-container">
        <h5>Często zadawane pytania:</h5>
        <?php
            $faqPost = new WP_Query( array(
                'post_per_page' => 4,
                'post_type' => 'pytanie'
            ));
            while($faqPost->have_posts()) {
                $faqPost->the_post();
                ?>
            <div class="question flex-container">
                <div class="flex-container question-title js-open-close-trigger">
                    <h6>
                        <?php echo get_the_title() ?>
                    </h6>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="faq-content">
                    <?php echo get_the_content() ?>
                </div>
            </div>
        <?php 
        }        
        ?>
    </div>
</section>
<?php
get_footer();
?>
