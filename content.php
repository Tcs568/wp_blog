<!-- content php -->
<article class="post__article">
    <header class="article__head">
        <?php
        if (is_single()) {
            the_title('<h1>', '</h1>');
        } else {
            the_title('<h1><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
        }
        ?>
    </header>
    <div class="post__meta">
        <div class="meta__date">
            <time class="entry-date published"><?php the_date(); ?></time>
        </div>
        <div class="meta__tag">
            <span class="mata__item">
                <?php the_tags('<span class="tags-links">タグ: ', ', ', '</span>'); ?>
            </span>
        </div>
    </div>
    <div class="article__thumb">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="article__content">
        <?php
        the_content();
        ?>
    </div>
</article>
<!-- end content php -->