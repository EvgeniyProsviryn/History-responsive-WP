<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <?php if(is_page_template('page-home.php') or is_blog()){ ?>
    <!-- Page Loading Animation #ID -->
    <div id="loading"></div>


    <?php } if(is_blog()){ ?>

    <?php } ?>

   <?php /* <!-- Header -->
    <nav class="main-menu">
        <div class="menu-align">
            <!-- Main Menu Left -->
            <?php
            if ( has_nav_menu( 'header_left_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_left_menu',
                    'menu'			=> 'Header Left Menu',
                    'menu_class'	=> 'menu menu-left cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>

            <!-- Logo -->
            <ul class="logo">
                <?php if(ale_get_option('sitelogo')){ ?>
                    <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <?php } else { ?>
                    <a href="<?php echo home_url(); ?>/" class="alelogo"><?php echo bloginfo('name'); ?></a>
                <?php } ?>
            </ul>



            <!-- Main Menu Right -->
            <?php
            if ( has_nav_menu( 'header_right_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_right_menu',
                    'menu'			=> 'Header Right Menu',
                    'menu_class'	=> 'menu menu-right cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>

            <!-- DropDown -->
            <div class="menu-click-drop">
                <a><?php _e('MENU','aletheme'); ?></a>

                <?php
                if ( has_nav_menu( 'mobile_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'mobile_menu',
                        'menu'			=> 'Mobile Menu',
                        'menu_class'	=> 'dropdown-menu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
            </div>
        </div>
    </nav>
 */?>

    <div class="col-md-12 preload">
        <center><div class="pre-container">
                <ul>
                    <li id="dot1" class="dot"></li>
                    <li id="dot2" class="dot"></li>
                    <li id="dot3" class="dot"></li>
                    <li id="dot4" class="dot"></li>
                    <li id="dot5" class="dot"></li>
                </ul>
            </div></center>
        <div class="preloader-text">
            <center>LOADING</center>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="menu">
                <div class="top-line"></div>
                <div class="middle-line"></div>
                <div class="bottom-line"></div>
            </div>
        </div>
    </div>
    <header class="main_header paralax-window" data-parallax="scroll" data-image-src="
    <?php if(ale_get_option('headerimg')){?>
        <?php echo ale_get_option('headerimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/img/mlechnyy-put-krany-derevya.jpg"
        <?php }?>
        >
        <div class="col-md-12 logotext zoomIn animated">
            <?php echo ale_get_option('sitename')?>
            <span class="logotext2"> <?php echo ale_get_option('siteslogan')?></span>
        </div>
    </header>

    <div class="col-md-12 menu-list">
            <?php /*<a href="index.html"><li class="nav1">Home</li></a>
            <a href="about.html"><li class="nav2">About us</li></a>
            <a href="blog.html"><li class="nav3">Blog</li></a>
            <a href="portfolio.html"><li class="nav4">Portfolio</li></a>
            <a href="contact.html"><li class="nav5">Contact us</li></a>
            */?>
            <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_menu',
                    'menu'			=> 'Header Menu',
                    'menu_class'	=> '',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>
    </div>
