   <?php get_header(); ?>
   <div class="content">
       <div class="row">
           <!-- post -->
           <div class="col-sm-12 col-lg-8">
               <main id="main">
                   <section id="post">
                       <div class="post__inner">
                           <!-- アーカイブのタイトルを表示 -->
                           <?php the_archive_title('<p>', '</p>'); ?>
                           <!-- 記事の有無を確認 -->
                           <?php if (have_posts()) :
                                while (have_posts()) : the_post();
                                    get_template_part('content');
                                endwhile;
                                // 前後ページの遷移
                                the_posts_pagination(array(
                                    'prev_text' => '&larr',
                                    'next_text' => '&rarr',
                                ));
                            else :
                                echo '記事はありません';
                            endif ?>
                       </div><!-- end post inner -->
                   </section><!-- end post -->
               </main>
               <?php get_sidebar() ?>
           </div><!-- end post col -->
           <?php get_footer(); ?>
           <!-- end archive php -->