   <?php get_header(); ?>
   <div class="content">
       <div class="row">
           <!-- post -->
           <div class="col-sm-12 col-lg-8">
               <main id="main">
                   <section id="post">
                       <div class="post__inner">
                           <?php while (hav_posts()) : the_post(); ?>
                               <!-- content_page.phpか、それがない場合はcontent.phpを読み込む -->
                               <?php get_template_part('content', 'page'); ?>
                           <?php endwhile; ?>
                       </div><!-- end post inner -->
                   </section><!-- end post -->
               </main>
               <?php get_sidebar() ?>
           </div><!-- end post col -->
           <?php get_footer(); ?>
           <!-- end archive php -->