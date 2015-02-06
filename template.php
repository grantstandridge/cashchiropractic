<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?>">

						<header class="article-header">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							<p class="byline vcard">
								<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'gestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
							</p>

						</header>

						<section class="entry-content cf" itemprop="articleBody">
							<?php the_content(); ?>
						</section>

						<footer class="article-footer cf">

						</footer>

					</article>

					<?php endwhile; else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'gestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'gestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page.php template.', 'gestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

				</div>

			</div>

<?php get_footer(); ?>
