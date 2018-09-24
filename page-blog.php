<?php get_header(); ?>

<main id='blog-background'>
<div id='block3'>
	<div class="blog-caption">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php $caption = get_field('caption');?>
		<h3><?php echo $caption; ?></h3>
		
		<?php if ( 'post' == get_post_type() ) : // Only display post date and author if this is a Post, not a Page. ?>
		<div class="entry-meta">
			<?php shape_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>
	<div class='page-main-blog'>
		<div class='content'>
			<div class='content-blog-1'>
				<?php

				$args = array(
					'post_type' => 'blog_1'
				);
					
				$my_query = new WP_Query( $args );
					
				if ( $my_query->have_posts() ) {
					
					while ( $my_query->have_posts() ) {

				$my_query->the_post();
					$image = get_field('blog_image');
					$blog_url = get_field('url');
				?>

				<a class='blog1' href='<?php the_permalink(); ?>'>
					<p><?php echo $blog_url; ?></p>
					<img src="<?php echo $image[sizes][large]; ?>" alt="">
				</a>
				<div class='content-blog-1-caption'>
					<div class='caption-blog'>
						<div class='caption-edit'>
							<a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/blog-main-edit-icon.png' /></a>
						</div>
						<div class='caption-name'>
							<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
							<div class='caption-sub-name'>
								<p><img src='<?php echo get_template_directory_uri(); ?>/img/blog-main-calendar-icon.png' /> <?php the_time('F j, Y') ?></p>
								<p><img src='<?php echo get_template_directory_uri(); ?>/img/blog-main-sms-icon.png' /> 12 Comments</p>
								<p><img src='<?php echo get_template_directory_uri(); ?>/img/blog-main-location-icon.png' /> Public ,News</p>
								<p><img src='<?php echo get_template_directory_uri(); ?>/img/blog-main-eye-icon.png' /> 124 Views</p>
								<p><img src='<?php echo get_template_directory_uri(); ?>/img/blog-main-like-icon.png' /> </p>
							</div>
						</div>
					</div>
					<?php the_tags("<i class='fa fa-tag'></i> ", ' • ', '<br />') ?>
					<div class='description-blog'>
						<p><?php the_content('<a>'); ?></p>
						<a class='button' href='<?php the_permalink(); ?>'>Read More</a>
					</div>
				</div>
				<?php
					} // end while
				} // end if
				?>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
</div>
</main>

<?php get_footer(); ?>