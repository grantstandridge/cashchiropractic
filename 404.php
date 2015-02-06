<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<article id="post-not-found" class="hentry cf">

						<header class="article-header">

							<h1><?php _e( 'Epic 404 - Article Not Found', 'gestheme' ); ?></h1>

						</header>

						<section class="entry-content">

							<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'gestheme' ); ?></p>

						</section>

						<section class="search">

								<p><?php get_search_form(); ?></p>

						</section>

						<footer class="article-footer">

								<p><?php _e( 'This is the 404.php template.', 'gestheme' ); ?></p>

						</footer>

					</article>

				</div>

			</div>

<?php get_footer(); ?>
