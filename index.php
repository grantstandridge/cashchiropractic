<?php
    get_header();
    $bgImageObject = get_field('bg_image');
    $bgImageURL = ( !empty($bgImageObject) ? $bgImageObject['url'] : "http://www.placecage.com/gif/1100/400?v=" . rand(100, 999) );
?>
    <section id="hero" class="hero bg-color-primary" data-bg-url="<?php echo $bgImageURL; ?>"></section>
    <section class="tagline color-white bg-color-primary">
        <div class="layout-wrap">
            <h2>Blog</h2>
        </div>
    </section>
    <section class="wysiwyg">
        <div class="layout-wrap">
            <h3 style="color:#6d6e71">All</h3>
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?><article class="post">
                <?php if (has_post_thumbnail()) : echo "<a href='". get_the_permalink() ."' class='post__banner'>"; the_post_thumbnail('large'); echo "</a>"; endif; ?>
                <header class="post__header">
                    <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <p><time datetime="<?php echo get_the_time('Y-m-d'); ?>">Published on <?php echo get_the_time(get_option('date_format')); ?></time></p>
                </header>
                <section class="post__content">
                    <?php the_excerpt(); ?>
                </section>
                <footer class="post__footer">
                    <p><a href="<?php the_permalink(); ?>" class="color-primary">read full post</a></p>
                </footer>
            </article><?php endwhile;else : ?><h4 style="color:#6d6e71">No posts yet. Check back soon!</h4><?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
