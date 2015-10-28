<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div class='masonry-wrapper'>
								<div class="post-sizing"></div>
								<div class="post-gutter"></div>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php
									$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ms-masonry' );
								?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
									<a class='feature-thumb' href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" style="background-image: url('<?php echo $featuredImage[0]; ?>');">
										<!-- <img src="<?php echo get_template_directory_uri(); ?>/library/images/16x9-placeholder.png"> -->
										<img src="<?php echo $featuredImage[0]; ?>" width="<?php echo $featuredImage[1]; ?>" height="<?php echo $featuredImage[2]; ?>">
									</a>
									<header class="article-header">
										
										<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="entry-meta">
	                      <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
		     								/* the time the post was published */
		     								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
		     								/* the author of the post */
		     								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
		  							); ?>
										</p>
										
									</header>

									<section class="entry-content">
										<?php the_excerpt(); ?>
										
									</section>

									<footer class="article-footer">
										<p class="footer-comment-count">
											<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
										</p>


	                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

	                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


									</footer>

								</article>

								<?php endwhile; ?>

										

								<?php else : ?>

										<article id="post-not-found" class="hentry">
												<header class="article-header">
													<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
												<section class="entry-content">
													<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>

							</div>
							<?php bones_page_navi(); ?>
						</main>

				</div>

			</div>


<?php get_footer(); ?>
