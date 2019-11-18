<!-- sidebar -->
<div class="col-sm-12 col-lg-4">
    <aside id="sidebar">
        <div class="sidebar__inner">
            <?php
            if (is_active_sidebar('footer-1')); { ?>
                <div class="footer__widget">
                    <?php dynamic_sidebar('footer-1') ?>
                </div>
            <?php } ?>
            <?php
            if (is_active_sidebar('footer-1')); { ?>
                <div class="footer__widget">
                    <?php dynamic_sidebar('footer-1') ?>
                </div>
            <?php } ?>
        </div><!-- end sidebar inner -->
    </aside><!-- end sidebar -->
</div><!-- end sidebar col -->