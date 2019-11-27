<!-- 固定ページ page.php -->
<?php get_header(); ?>
<!-- post -->
<div class="col-sm-12 col-lg-8">
    <main id="main">
        <section id="post">
            <div class="post__inner">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'page'); ?>
                <?php endwhile; ?>
            </div><!-- end post inner -->
        </section><!-- end post -->
    </main>
</div><!-- end post col -->
<?php get_sidebar(); ?>
<?php get_footer();
