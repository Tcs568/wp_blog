<!-- index.php -->
<?php get_header(); ?>
<!-- post -->
<div class="col-sm-12 col-lg-8">
    <main id="main">
        <section id="post">
            <div class="post__inner">
                <?php
                if (have_posts()) :

                    while (have_posts()) : the_post();

                        get_template_part('content');

                    endwhile;

                    the_posts_pagination(array(
                        'prev_text' => '&larr;',
                        'next_text' => '&rarr;',
                    ));
                else :

                    echo '記事はありません。';

                endif;
                ?>
            </div><!-- end post inner -->
        </section><!-- end post -->
    </main>
</div><!-- end post col -->
<?php get_sidebar(); ?>
<?php get_footer();
// end index.php
