<div class='sidebar'>
    <div class='socials'>
        <div class='socials__image'>
            <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-socials1.png' /></a>
            <div class='socials__caption'>
                <p>+1000</p>
            </div>
        </div>
        <div class='socials__image'>
            <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-socialsFB.png' /></a>
            <div class='socials__caption'>
                <p>1241</p>
            </div>
        </div>
        <div class='socials__image'>
            <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-socialsTwitter.png' /></a>
            <div class='socials__caption'>
                <p>2541</p>
            </div>
        </div>
        <div class='socials__image'>
        <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-socials4.png' /></a>
            <div class='socials__caption'>
                <p>5474</p>
            </div>
        </div>
    </div>
    <div class='widget'>
        <div class='sidebar-categories'>
            <p>Categories</p>
            <ul class='sidebar-categories__sub'>
                <li class='cat-item'><a href='#'>Technology</a></li>
                <li class='cat-item'><a href='#'>Development</a></li>
                <li class='cat-item'><a href='#'>News</a></li>
                <li class='cat-item'><a href='#'>HTML5&CSS3</a></li>
                <li class='cat-item'><a href='#'>Photography</a></li>
                <li class='cat-item'><a href='#'>JavaScript</a></li>
                <li class='cat-item'><a href='#'>Design</a></li>
                <li class='cat-item'><a href='#'>Tutorials</a></li>
                <li class='cat-item'><a href='#'>Web Design</a></li>
                <li class='cat-item'><a href='#'>Other</a></li>
            </ul>
        </div>

        <div class='sidebar-filtr'>
            <ul class='sidebar-filtr__buttons'>
                <li><a href='#'>Popular</a></li>
                <li><a href='#'>Recent</a></li>
                <li><a href='#'>Comments</a></li>
                <li><a href='#'>Tags</a></li>
            </ul>
            <ul class='sidebar-filtr__blog'>
                <li>
                    <div class='blog-photo image1'></div> <a href='#'> Standard Post with The blog.</a>
                    <div class='sidebar-filtr__calendar'>
                        <br>
                        <img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-calendar-icon.png' /> 21 March 2013
                    </div>
                </li>
                <li>
                    <div class='blog-photo image2'></div> <a href='#'>Simple Audio Post with The Whole Kaboodle ..</a>
                    <div class='sidebar-filtr__calendar'>
                        <img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-calendar-icon.png' /> 21 March 2013
                    </div>
                </li>
                <li>
                    <div class='blog-photo image3'></div> <a href='#'>Duis a lorem enim sodales dui liquam  lectus diam</a>
                    <div class='sidebar-filtr__calendar'>
                        <img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-calendar-icon.png' /> 21 March 2013
                    </div>
                </li>
                <li>
                    <div class='blog-photo image4'></div> <a href='#'>Morbi iaculis viverra metus sed</a>
                    <div class='sidebar-filtr__calendar'>
                        <br>
                        <img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-calendar-icon.png' /> 21 March 2013
                    </div>
                </li>
            </ul>
        </div>

        <div class='sidebar-ads'>
                <?php

                $args = array(
                    'post_type' => 'sidebar_ads'
                );
                    
                $my_query = new WP_Query( $args );
                    
                if ( $my_query->have_posts() ) {
                    
                    while ( $my_query->have_posts() ) {

                $my_query->the_post();
                ?>

            <p><?php the_title(); ?></p>

                <?php if( have_rows('sidebar_photo') ): ?>

                <div class="sidebar-ads__photo">

                    <?php while( have_rows('sidebar_photo') ): the_row(); 

                        // переменные
                        $source = get_sub_field('add_photo');

                        ?>

                    <div class="add__photo">
                        <a href='<?php the_permalink(); ?>'><img src="<?php echo $source[sizes][medium]; ?>" /></a>
                    </div>
                    
                    <?php endwhile; ?>

                </div>

                <?php endif; ?>
                <?php
					} // end while
				} // end if
				?>
        </div>
    
        <div class='sidebar-flickr'>
            <p>Flickr Images</p>
            <div class='flickr__image'>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-1.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-2.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-3.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-4.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-5.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-6.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-7.png' /></a>
                <a href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/sidebar-flickr-image-8.png' /></a>
            </div>
        </div>

        <div class='sidebar-tags'>
            <p>Tags</p>
            <div class='sidebar-tags__buttons'>
                <a class='btn' href='#'>Art</a>
                <a class='btn' href='#'>Awesome</a>
                <a class='btn' href='#'>Classic</a>
                <a class='btn' href='#'>Photo</a>

                <a class='btn' href='#'>Wordpress</a>
                <a class='btn' href='#'>Videos</a>
                <a class='btn' href='#'>Standard</a>
                <a class='btn' href='#'>Gaming</a>

                <a class='btn' href='#'>Art</a>
                <a class='btn' href='#'>Awesome</a>
                <a class='btn' href='#'>Classic</a>
                <a class='btn' href='#'>Photo</a>
            </div>
        </div>

        <div class='sidebar-newsletter'>
            <p>Newsletter</p>
            <form action='send.php' method='post'>
            <input class='add__mail' type='text' name='email' placeholder='Your email address' required>
            <input class='btn__subs' type='button' value='Subscribe'>
            </form>
        </div>
    </div>
</div>