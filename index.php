<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?>">
        <h1 class="page-title"><?php the_title(); ?></h1>
            <section class="entry-content cf">
                <?php the_content(); ?>
            </section>
        </article>
<?php endwhile; else : ?>
        No posts yet!
<?php endif; ?>
<?php get_footer(); ?>