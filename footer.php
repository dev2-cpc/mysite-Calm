<footer>
        <div id='block3'>
            <div class='page-footer'>
                <div class='page-footer-about'>
                    <h3><?php the_field('footer_title','options')?></h3>
                    <p><?php the_field('footer_about_text','options')?></p>
                    <div class='page-footer-social'>
                        <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/header-twitter.png' /></a>
                        <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/header-FB.png' /></a>
                        <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/header-3.png' /></a>
                        <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/header-google.png' /></a>
                        <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/header-5.png' /></a>
                    </div>
                </div>
                <div class='page-footer-posts'>
                    <h3>LATEST POSTS</h3>
                        <?php

                        $args = array(
                            'post_type' => 'blog_1'
                        );
                            
                        $my_query = new WP_Query( $args );
                            
                        if ( $my_query->have_posts() ) {
                            
                            while ( $my_query->have_posts() ) {
                                if ($i == 4) 
                                    break;
                                $i++;
                        $my_query->the_post();
                        ?>

                    <div class='post'>
                        <a href='<?php the_permalink(); ?>'>
                            <p><?php the_title(); ?></p>
                            <span><?php the_time('j F Y') ?></span>
                        </a>
                    </div>
                    
                    <?php
                        } // end while
                            } // end if
                    ?>
                </div>
                <div class='page-footer-comments'>
                    <h3>LATEST COMMENTS</h3>
                    <div class='comment'>
                        <p>Dann Petty on Curabitur pharetra, ante
                        lobortis dictum.</p>
                    </div>
                    <div class='comment'>
                        <p>Kevin Kalde on Aliquam vulputate, pede vel 
                        vehicula accumsan, mi neque rutrum erat, 
                        eu congue orci lorem eget lorem. </p>
                    </div>
                    <div class='comment'>
                        <p>Sean McCabe on Class aptent taciti sociosqu 
                        ad litora torquent per </p>
                    </div>
                </div>
                <div class='page-footer-photo'>
                    <h3>FLICKR PHOTOSTREAM</h3>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/footer-photo1.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/main-photo10.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/main-photo6.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/main-photo11.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/footer-photo5.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/footer-photo6.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/footer-photo7.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/footer-photo8.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/main-photo5.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/main-photo2.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/footer-photo11.png' /></a>
                    <a href='#' target='_blank'><img src='<?php echo get_template_directory_uri(); ?>/img/main-photo7.png' /></a>
                </div>
            </div>
        
            <div class='page-footer-nav'>
                <p>Copyright 2013 Calm. All Rights Reserved.</p>
                <nav class='page-footer-navbar'>
                    <ul class='footer-navbar'>
                        <li class='navbar-item'>
                            <a class='navbar-link' href='index.html'>Home</a>
                        </li>
                        <li class='navbar-item'>
                            <a class='navbar-link' href='#'>About</a>
                        </li>
                        <li class='navbar-item'>
                            <a class='navbar-link' href='#'>Portfolio</a>
                        </li>
                        <li class='navbar-item'>
                            <a class='navbar-link' href='blog/blog.html'>Blog</a>
                        </li>
                        <li class='navbar-item'>
                            <a class='navbar-link' href='#'>Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script rel="stylesheet" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>