<?php get_header(); ?>
<!-- post -->
<div class="col-sm-12 col-lg-8">
    <main id="main">
        <section id="post">
            <div class="post__inner">
                <h2>404 Not Found（ページが見つかりませんでした）</h2>
                <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
                <p class="error_url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
                <p>現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
                <?php get_search_form(); ?>
            </div><!-- end post inner -->
        </section><!-- end post -->
    </main>
</div><!-- end post col -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>