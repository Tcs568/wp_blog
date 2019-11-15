<?php get_header(); ?>
<article class="post__article<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="article__head">
        <!-- 個別と個別投稿できない場合を分岐 -->
        <?php if (is_single()) {
            the_title('<h1>', '</h1>');
        } else {
            the_title('<h1><a href=". esc_url(get_permlink())  .">', '</a></h1>');
        }
        ?>
    </header>
    <div class="post__meta">
        <div class="meta__date">
            <!-- date -->
            <!-- <span class="meta__item"> -->
            <?php the_date('<span class="meta__item"><i class="far fa-calendar-alt a-fw"></i>', ' </span>'); ?>
            <!-- <i class="far fa-calendar-alt a-fw"></i> -->
            <!-- </span> -->
        </div>
        <div class="meta__tag">
            <!-- tag -->
            <!-- <span class="mata__item"> -->
            <?php the_tags('<span class="mata__item"><i class="fas fa-tag a-fw"></i>', '</span>'); ?>
            <!-- <i class="fas fa-tag a-fw"></i> -->
            <!-- </span> -->
        </div>
    </div>
    <!-- thumbの分岐を作成 -->
    <div class="article__thumb">
        <?php the_post_thumbnail(array(200, 200)); ?>
    </div>
    <div class="article__content">
        <?php the_content(); ?>
    </div>
    <div class="article__btn">
        <?php the_content('続きを読む'); ?>
    </div>
</article>