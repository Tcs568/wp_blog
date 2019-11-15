<!-- php header -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ress.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- header -->
        <header id="header">
            <div class="header__inner">
                <div class="header__brand">
                    <h1 class="brand__title"><a href="<?php echo esc_url(home_url('/')); ?>"></a></h1>
                    <!-- サイトの説明の有無を確認する -->
                    <?php $description = get_bloginfo('description', 'display');
                    if ($description) : ?>
                        <p class="header__description"></p>
                    <?php endif ?>
                </div>
                <!-- globalnav -->
                <?php if (has_nav_menu('globalnav')); ?>
                <nav id="globalnav">
                    <ul class="globalnav__list">
                        <li class="list__item">
                            <a class="list__link" href="">ホーム</a>
                        </li>
                    </ul>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'globalnav',
                        'container_id' => 'globalnav',
                        'manu_class' => 'globalnav__list',
                    )) ?>
                </nav><!-- end globalnav -->
            </div><!-- end header inner -->
        </header>
        <!-- top -->
        <div id="top">
            <!-- end header php -->
            <div class="top__inner">
                <div id="contents">
                    <div class="container">
                        <!-- Slider main container -->
                        <div class="item-container  swiper-container mb60"></div>
                    </div>
                </div>
            </div><!-- end top inner -->
        </div>
        <!-- main -->
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
                                <!-- content php -->
                                <!-- <article class="post__article">
                                <header class="article__head">
                                    <h1>記事タイトル</h1>
                                </header>
                                <div class="post__meta">
                                    <div class="meta__date">
                                        <span class="meta__item">
                                            <i class="far fa-calendar-alt a-fw"></i>
                                        </span>
                                    </div>
                                    <div class="meta__tag">
                                        <span class="mata__item">
                                            <i class="fas fa-tag a-fw"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="article__thumb">
                                    <img width="840" src="img/profile.png" alt="記事画像" />
                                </div>
                                <div class="article__content">
                                    <p>
                                        ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事
                                        ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事
                                        ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事ここに記事
                                    </p>
                                </div>
                                <div class="article__btn">
                                    <button><a href="/single.html">もっと読む</a></button>
                                </div>
                                </article> -->
                                <!-- end content php -->
                                <!-- <div class="post__nav">
                                <div class="post__prev">
                                    <span><i class="fas fa-chevron-left"></i><a href="">前の記事</a></span>
                                </div>
                                <div class="post__next">
                                    <span><a href="">次の記事</a><i class="fas fa-chevron-right"></i></span>
                                </div>
                                </div> -->
                            </div><!-- end post inner -->
                        </section><!-- end post -->
                    </main>
                    <?php get_sidebar() ?>
                </div><!-- end post col -->
                <?php get_footer(); ?>
                <!-- end archive php -->
                <!-- sidebar -->
                <div class="col-sm-12 col-lg-4">
                    <aside id="sidebar">
                        <div class="sidebar__inner">
                            <div class="sidebar__box">
                                <div class="sidebar__head"><span>管理人について </span></div>
                                <div class="sidebar__profile">
                                    <div class="profile__thumb">
                                        <img src="img/profile.png" alt="まさと" class="profile__img" />
                                    </div>
                                    <div class="profile__item">
                                        <p>まさと</p>
                                    </div>
                                    <div class="profile__item">
                                    </div>
                                    <div class="profile__item">
                                        <p>
                                            おすすめ商品を紹介していきます！
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__box">
                                <div class="sidebar__head"><span>タイトル</span></div>
                                <ul class="sidebar__list">
                                    <li class="sidebar__item">
                                        <a href="">リンク</a>
                                </ul>
                            </div>
                            <div class="sidebar__box">
                                <div class="sidebar__head --bottom"><span>検索</span></div>
                                <form action="" id="searchform">
                                    <div class="search__group">
                                        <input type="text" class="search__box" 　value="" />
                                        <button class="search__btn">
                                            <span><i class="fas fa-search"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end sidebar inner -->
                    </aside><!-- end sidebar -->
                </div><!-- end sidebar col -->
            </div><!-- end row -->
        </div><!-- end content -->
    </div><!-- end wrapper -->
    <!-- footer -->
    <footer id="footer">
        <div class="footer__inner">
            <div class="footer-menu__btn">
                <a href="#"><span><i class="fas fa-home">トップページへ</i></span></a>
            </div>
            <div class="footer__content">
                <ul class="footer__nav">
                    <li class="footer__list">
                        <a class="list__link" href="/contact.html">お問い合わせ</a>
                    </li>
                </ul>
                <small class="footer__copy">©2019 商品.com</small>
            </div>
        </div><!-- end footer inner -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="main.js"></script>
</body>

</html>