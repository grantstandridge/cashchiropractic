<?php
    get_header();
    $bgImageObject = get_field('bg_image');
    $bgImageURL = ( !empty($bgImageObject) ? $bgImageObject['url'] : "http://www.placecage.com/c/1100/400?v=" . rand(100, 999) );

    $headline = get_field('intro_text');

    $showSidebar = ( get_field('show_sidebar') ? " split" : "" );
?>
    <section id="hero" class="hero bg-color-primary" data-bg-url="<?php echo $bgImageURL; ?>"></section>
    <?php if ( !empty($headline) ) : ?><section class="tagline color-white bg-color-primary">
        <div class="layout-wrap">
            <h2><?php echo $headline; ?></h2>
        </div>
    </section><?php endif; ?>
    <section class="wysiwyg<?php echo $showSidebar; ?>">
        <div class="layout-wrap">
            <?php if ( !empty($showSidebar) ) : ?><div class="main">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                    if(is_page('contact')) : ?>
                        <h3>Send us a message</h3>
                        <?php gravity_form( 1, false, false, false, '', false );
                    endif;
                endwhile;
                endif;
                ?>
            </div><div class="complement"><?php the_field('sidebar'); ?></div>
                <?php
                    else :
                    if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                    if(is_page('contact')) : ?>
                        <h3>Send us a message</h3>
                        <?php gravity_form( 1, false, false, false, '', false );
                    endif;
                endwhile;
                endif;
                endif;
                ?>
        </div>
    </section>
<?php get_footer(); ?>
