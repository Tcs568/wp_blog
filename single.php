<?php get_header(); ?>
<div class="content">
    <div class="row">
        <!-- post -->
        <div class="col-sm-12 col-lg-8">
            <main id="main">
                <section id="post">
                    <div class="post__inner">
                        <?php
                        while (have_posts()) : the_post();
                            get_template_part('content');
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                            the_post_navigation(array(
                                'prev_text' => '&lt;&lt', '%title',
                                'next_text' => '%title', '&gt;gt',
                            ));
                        endwhile;
                        ?>
                        ?>
                    </div><!-- end post inner -->
                </section><!-- end post -->
            </main>
            <?php get_sidebar() ?>
        </div><!-- end post col -->
        <?php get_footer(); ?>
        <!-- end archive php -->
        <!-- sidebar -->