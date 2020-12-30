<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description') ?></title>
    <!--Google Fonts Open Sans-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/styles/main.css">
</head>
<body>

    <div class="wrapper-block">

        <!-- ====================== Header ====================== -->      
        <header>
            <nav class="menu">
                <h1 class="side-header"><?php bloginfo('name') ?></h1>
                <ul class="menu__list">
                    <li>
                        <div class="menu__link">
                            Menu
                            <img class="drop-arrow" src="<?php bloginfo('template_directory') ?>/img/drop-down-arrow.svg" alt="">
                        </div>
                        <!-- <ul class="sub-menu__list"> -->
						<?php 
						wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => 'sub-menu__list',
							'container_id'    => '',
							'menu_class'      => 'sub-menu__list',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '',
							'depth'           => 0,
							'walker'          => '',
						) );
						?>
                        <!-- </ul> -->
                    </li>
                </ul>
            </nav>
        </header>