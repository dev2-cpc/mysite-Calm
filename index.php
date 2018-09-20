<?php get_header(); ?>

<main id='blog-background'>
	<div id='block3'>
		<div class="blog-caption">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if ( 'post' == get_post_type() ) : // Only display post date and author if this is a Post, not a Page. ?>
			<div class="entry-meta">
				<?php shape_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		<div class='page-main-blog'>
			<div class='content'>
				<?php /* The Loop — with comments! */ ?>
				<?php while ( have_posts() ) : the_post() ?>
				<?php /* Create an HTML5 article section with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<?php if ( is_search() ) : // Only display Excerpts on Search results pages ?>
						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
					<?php else : ?>
					<div class="entry-content">
						
					<div class='blog1'> 
						<?php $image = get_field('blog_image'); $blog_url = get_field('url'); ?>
						<p><?php echo $blog_url; ?></p>
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
					</div>
						<?php the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'shape' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					<?php endif; ?>
				
					<?php /* Show the post's tags, categories, and a comment link. */ ?>
					<footer class="entry-meta">
						<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for Pages in Search results ?>
						<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'shape' ) );
							if ( $categories_list && shape_categorized_blog() ) :
						?>
						<span class="cat-links">
							<?php printf( __( 'Posted in %1$s', 'shape' ), $categories_list ); ?>
						</span>
						<?php endif; // End if categories ?>
				
						<?php
							/* translators: used between list items, there is a space after the comma */
							$tags_list = get_the_tag_list( '', __( ', ', 'shape' ) );
							if ( $tags_list ) :
						?>
							<span class="sep"> | </span>
							<span class="tag-links">
									<?php printf( __( 'Tagged %1$s', 'shape' ), $tags_list ); ?>
							</span>
							<?php endif; // End if $tags_list ?>
						<?php endif; // End if 'post' == get_post_type() ?>
				
						<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
						<span class="sep"> | </span>
						<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'shape' ), __( '1 Comment', 'shape' ), __( '% Comments', 'shape' ) ); ?></span>
						<?php endif; ?>

					</footer><!-- .entry-meta -->
					<?php /* Close up the article and end the loop. */ ?>
				</article><!-- #post-<?php the_ID(); ?> -->
				<?php endwhile; ?>
				<?php//comments_template(); ?>
			</div>
			<?php get_sidebar();?>
		</div>
	</div>
</main>

<?php get_footer(); ?>