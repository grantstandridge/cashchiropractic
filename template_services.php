<?php
/*
 Template Name: Services
 *
*/
?>
<?php
    get_header();

    if( have_posts() ) : while( have_posts() ) : the_post(); $post_content = apply_filters('the_content', get_the_content()); endwhile; else : $post_content = ""; endif;

    $bgImageObject = get_field('bg_image');
    $bgImageURL = ( !empty($bgImageObject) ? $bgImageObject['url'] : get_stylesheet_directory_uri() . "/library/images/family.jpg" );

    $headline = get_field('intro_text');

    $servicesPrimary = get_field('services_primary');

    $servicesSecondaryHeading = get_field('services_secondary_heading');
    $servicesSecondary = get_field('services_secondary');
?>
    <section id="hero" class="hero bg-color-primary" data-bg-url="<?php echo $bgImageURL; ?>"></section>
    <?php if ( !empty($headline) ) : ?><section class="tagline color-white bg-color-primary">
        <div class="layout-wrap">
            <h2><?php echo $headline; ?></h2>
        </div>
    </section><?php endif; ?>
    <?php if ( !empty($post_content) ) : ?><section class="wysiwyg">
        <div class="layout-wrap">
            <?php echo $post_content; ?>
        </div>
    </section><?php elseif ( isset($servicesPrimary) ) : ?><section class="services-primary">
        <div class="layout-wrap">
            <?php while ( has_sub_field('services_primary') ) : ?><section class="item center-text">
                <h3 class="item__title bold color-dark"><?php the_sub_field('title'); ?></h3>
                <p class="item-body"><?php the_sub_field('body'); ?></p>
            </section><?php endwhile; ?>
        </div>
    </section><?php endif; ?>
    <?php if ( isset($servicesSecondary) ) : ?><section class="services-secondary bg-color-light">
        <div class="layout-wrap">
            <h2 class="heading color-primary"><?php echo $servicesSecondaryHeading; ?></h2>
            <ul class="service-list list-reset">
                <?php while ( has_sub_field('services_secondary') ) : ?><li class="service-item">
                    <em class="cost regular normal color-primary">$<?php the_sub_field('cost'); ?></em><span class="name color-med bold">per&nbsp;<?php the_sub_field('name'); ?></span><?php if ( get_sub_field('details') ) : ?><a href="javascript:void(0)" class="trigger-service bold color-primary">+</a><?php endif; ?>
                    <?php if ( get_sub_field('details') ) : ?><p class="details color-med"><?php the_sub_field('details'); ?></p><?php endif; ?>
                </li><?php endwhile; ?>
            </ul>
        </div>
    </section><?php endif; ?>
<?php get_footer(); ?>
