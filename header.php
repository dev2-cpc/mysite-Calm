<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
	
  <body <?php body_class(); ?>>

  <!-- BEGIN content -->
  <div class="out">
    <!-- begin header -->
    <header>
        <div id='block1'>
            <div class='page-header'>
                <a href="<?php echo home_url( '/' ); ?>"><h1>C<span class='color'>a</span>lm</h1></a>
                <p>Free Creative Simple Portfolio</p>

                <a class='open-panel' href='#'><i class='fas fa-bars'></i></a>

                <nav class="nav"> 
                    <?php
                    $menuParameters = array(
                    'menu'=> 'mymenu',
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    );
                    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
                </nav>

                <form class='page-search' name="search" method="post" action="<?php echo get_template_directory_uri(); ?>/search.php">
                    <input type='search' name='query' required placeholder='Поиск'>
                    <input type='image' src='<?php echo get_template_directory_uri(); ?>/img/nav-search.png'>
                </form>

            </div>
            <div class='page-header-greeting'>
                <div class='page-header-greeting-description'>
                    <h3>Welcome Ladies & Gents to Calm Website.</h3>
                    <p>A theme more stylish than any other on ThemeForest.</p>
                </div>
                <div class='page-header-social'>
                    <h2>FIND US ONLINE</h2>
                    <a class='social-twitter' href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/header-twitter.png'></a>
                    <a class='social-FB' href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/header-FB.png'></a>
                    <a class='social-3' href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/header-3.png'></a>
                    <a class='social-google' href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/header-google.png'></a>
                    <a class='social-5' href='#'><img src='<?php echo get_template_directory_uri(); ?>/img/header-5.png'></a>
                </div>
            </div>
        </div>
    </header>