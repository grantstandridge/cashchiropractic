<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?>">

            <h1 class="entry-title single-title"><?php the_title(); ?></h1>

            <section class="entry-content cf">

            <?php the_content(); ?>

            </section>

        </article>

        <?php endwhile; ?>

        <?php else : ?>

        Pretty much nothing posted yet, yo.

        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>