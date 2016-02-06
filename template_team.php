<?php
/*
 Template Name: Team
 *
*/
?>
<?php
    get_header();

    if( have_posts() ) : while( have_posts() ) : the_post(); $post_content = apply_filters('the_content', get_the_content()); endwhile; else : $post_content = ""; endif;

    $bgImageObject = get_field('bg_image');
    $bgImageURL = ( !empty($bgImageObject) ? $bgImageObject['url'] : "http://www.placecage.com/c/1100/400?v=" . rand(100, 999) );

    $headline = get_field('intro_text');

    $teamMembers = get_field('team_members');
?>
    <section id="hero" class="hero bg-color-primary" data-bg-url="<?php echo $bgImageURL; ?>"></section>
    <?php if ( !empty($headline) ) : ?><section class="tagline color-white bg-color-primary">
        <div class="layout-wrap">
            <h2><?php echo $headline; ?></h2>
        </div>
    </section><?php endif; ?>
    <?php if ( !empty($post_content) ) : ?><section class="secondary">
        <div class="layout-wrap">
            <?php echo $post_content; ?>
        </div>
    </section><?php endif; ?>
    <section class="wysiwyg split">
        <div class="layout-wrap">
            <div class="main">
                <?php if( $teamMembers ) : for($i = 0; $i < count($teamMembers); $i++){ $teammate = $teamMembers[$i]["bio"]; ?><article class='teammate-bio<?php if( $i == 0 ){ echo " focus"; } ?>'>
                    <?php echo $teammate; ?>
                </article><?php } else : ?><h3 class="italic color-med" style="color:#6d6e71">No bio information available</h3><?php endif; ?>
            </div><div class="complement">
                <?php if( $teamMembers ) : ?><ul class="teammates">
                    <?php for($i = 0; $i < count($teamMembers); $i++){ $teammate = $teamMembers[$i]["name"]; ?><li>
                        <a href="javascript:void(0)" <?php if( $i == 0 ) : ?>class="focus" <?php endif; ?>data-idx="<?php echo $i; ?>"><?php echo $teammate; ?></a>
                    </li><?php } ?>
                </ul><?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
