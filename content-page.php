<?php get_header(); ?>
<article class="post__article<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="article__head">
        <!-- 個別と個別投稿できない場合を分岐 -->
        <?php the_title('<h1>', '</h1>'); ?>
    </header>
    <div class="article__content">
        <?php the_content(); ?>
    </div>
</article>