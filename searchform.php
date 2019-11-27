<!-- searchform.php -->
<?php $unique_id = esc_attr(uniqid('search-form-')); ?>
<div class="sidebar__box">
    <div class="sidebar__head --bottom"><span>検索</span></div>
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" id="searchform" class="searchform">
        <input type="search" id="<?php echo $unique_id; ?>" class="search__box" placeholder="" value="<?php echo get_search_query(); ?>" name="s" />
        <button class="search__btn">
            <span><i class="fas fa-search"></i></span>
        </button>
    </form>
</div>