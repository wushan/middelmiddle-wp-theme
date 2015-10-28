<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
                $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ms-feature-bg' );
	            ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header entry-header">
                  <div class="overlay" style="background-image: url('<?php echo $featuredImage[0]; ?>');"></div>
	                  <div class="article-heder-inner">
	                    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

	                    <p class="entry-meta">

	                      <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	                         /* the time the post was published */
	                         '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                         /* the author of the post */
	                         '<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                      ); ?>

	                    </p>
	                  </div>

                </header> <?php // end article header ?>

								<section class="entry-content" itemprop="articleBody">
									<div class="main-content">
										<?php
											// the content (pretty self explanatory huh)
											the_content();

											/*
											 * Link Pages is used in case you have posts that are set to break into
											 * multiple pages. You can remove this if you don't plan on doing that.
											 *
											 * Also, breaking content up into multiple pages is a horrible experience,
											 * so don't do it. While there are SOME edge cases where this is useful, it's
											 * mostly used for people to get more ad views. It's up to you but if you want
											 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
											 *
											 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
											 *
											*/
											wp_link_pages( array(
												'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
												'after'       => '</div>',
												'link_before' => '<span>',
												'link_after'  => '</span>',
											) );
										?>
									</div>
								</section> <?php // end article section ?>

								<footer class="article-footer">

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
