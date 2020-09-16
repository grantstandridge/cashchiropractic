<?php
/*
 Template Name: Home
 *
*/
?>
<?php
    get_header();
    $bgImageObject = get_field('bg_image');
    $bgImageURL = ( !empty($bgImageObject) ? $bgImageObject['url'] : "http://www.placecage.com/gif/1100/400?v=" . rand(100, 999) );

    $headline = get_field('intro_text');

    $attributes = get_field('attributes');
?>
    <section id="hero" class="hero bg-color-primary" data-bg-url="<?php echo $bgImageURL; ?>"></section>
    <?php if ( !empty($headline) ) : ?><section class="tagline color-white bg-color-primary">
        <div class="layout-wrap">
            <h2><?php echo $headline; ?></h2>
        </div>
    </section><?php endif; ?>
    <?php if( isset($attributes) ) : ?><section class="secondary">
        <div class="layout-wrap">
            <?php while( has_sub_field('attributes') ) : ?><section class="item center-text">
                <?php if( get_sub_field('icon_suffix') ) : ?><i class="icon-<?php the_sub_field('icon_suffix'); ?> color-white bg-color-primary inline-block"></i><?php endif; ?>
                <p class="color-dark item-body"><?php the_sub_field('detail'); ?></p>
            </section><?php endwhile; ?>
        </div>
    </section><?php endif; ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); $the_post = get_the_content(); if( !empty($the_post) ) : ?><section class="wysiwyg">
        <div class="layout-wrap">
            <?php the_content(); ?>
        </div>
    </section><?php endif;endwhile;endif; ?>
    <section class="outro bg-color-light">
        <div class="layout-wrap">
            <section class="contact">
                <div class="method">
                    <p class="color-med">To learn more about Cash Chiropractic, please call us today at:</p>
                    <a href="tel:19182741141" class="phone color-primary bold">918.274.1141</a>
                </div>
                <div class="method">
                    <a href="https://www.google.com/maps/place/12707+East+86th+St+N,+Owasso,+OK+74055/@36.2790032,-95.8319746,17z/data=!3m1!4b1!4m2!3m1!1s0x87b6f0bc3acebd89:0xaad09313289ecc0" target="_blank" class="icon-pin-map color-primary inline-block"></a>
                    <address class="postal-address color-med inline-block">
                        12707 E 86th Street N, Ste. A<br />Owasso, OK 74055
                    </address>
                </div>
                <div class="method">
                    <a href="https://www.facebook.com/CashChiro" target="_blank" class="btn-share icon-facebook inline-block color-light bg-color-primary"></a><a href="https://twitter.com/CashChiro" target="_blank" class="btn-share icon-twitter inline-block color-light bg-color-primary"></a>
                </div>
            </section>
            <section class="hours">
                <?php the_field('hours', 'option'); ?>
            </section>
        </div>
    </section>
<?php get_footer(); ?>
