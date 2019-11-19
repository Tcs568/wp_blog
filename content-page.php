<!-- 固定ページ content-page php -->
<article class="post__article<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="article__head">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>
    <div class="article__content">
        <?php
        the_content();
        ?>
    </div>
</article>
<!-- end content-page php -->