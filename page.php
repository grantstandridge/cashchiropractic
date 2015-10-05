<?php
    get_header();
    $bgImageObject = get_field('bg_image');
    $bgImageURL = ( !empty($bgImageObject) ? $bgImageObject['url'] : get_stylesheet_directory_uri() . "/library/images/family.jpg" );

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
                <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
            </div><div class="complement"><?php the_field('sidebar'); ?></div><?php else : if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>