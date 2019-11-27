   <?php get_header(); ?>
   <!-- searchphp -->
   <!-- post -->
   <div class="col-sm-12 col-lg-8">
       <main id="main">
           <section id="post">
               <div class="post__inner">
                   <!-- 検索結果を表示 -->
                   <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            get_template_part('content');
                        endwhile;
                        the_posts_pagination(array(
                            'prev_text' => '&larr;',
                            'next_text' => '&rarr;',
                        ));
                    else : ?>
                       <p>お探しの記事は見つかりませんでした。</p>
                       <?php get_search_form(); ?>
                   <?php endif;
                    $cat_id = get_cat_ID(get_search_query());
                    if ($cat_id) :
                        $category_link = get_category_link($cat_id);
                        ?>
                       <hr>
                       <p>このブログには、カテゴリー「<?php the_search_query(); ?>」があります。<a href="<?php echo esc_url($category_link); ?>">&raquo;カテゴリー「<?php the_search_query(); ?>」の記事一覧へ</a></p>
                   <?php endif; ?>
               </div><!-- end post inner -->
           </section><!-- end post -->
       </main>
   </div><!-- end post col -->
   <?php get_sidebar(); ?>
   <?php get_footer(); ?>
   <!-- end  search php -->