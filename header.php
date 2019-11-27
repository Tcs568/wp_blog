       <!-- headr php -->
       <!DOCTYPE html>
       <html <?php language_attributes(); ?> class="no-js no-svg">

       <head>
         <meta charset="<?php bloginfo('charset'); ?>" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta http-equiv="X-UA-Compatible" content="ie=edge" />
         <?php wp_head(); ?>
       </head>

       <body　<?php body_class(); ?>>
         <!-- wrapper -->
         <div class="wrapper">
           <!-- header -->
           <header id="header">
             <div class="header__inner">
               <div class="header__brand">
                 <h1 class="brand__title">
                   <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                 </h1>
                 <?php $description = get_bloginfo('description', 'display');
                  if ($description) : ?>
                   <p class="header__description"><?php bloginfo('description'); ?></p>
                 <?php endif; ?>
               </div>
               <!-- globalnav -->
               <nav id="globalnav">
                 <?php if (has_nav_menu('global')) : ?>
                   <?php wp_nav_menu(array(
                        'theme_location'  => 'global',
                        'container_class' => 'menu-container',
                        'menu_class'         => 'globalnav__list',
                      )); ?>
                 <?php endif; ?>
               </nav><!-- end globalnav -->
             </div><!-- end header inner -->
           </header>
           <!-- top -->
           <div id="top">
             <div class="top__inner">
               <div id="contents">
                 <div class="container">
                   <!-- Slider main container -->
                   <div class="item-container  swiper-container mb60"></div>
                 </div>
               </div>
             </div><!-- end top inner -->
           </div>
           <!-- main -->
           <div class="content">
             <div class="row">
               <!-- end headr php -->