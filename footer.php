    </div><!-- end row -->
    </div><!-- end content -->
    </div><!-- end wrapper -->
    <?php get_template_part('template-part/footer/footer', 'template-part/footer/site', 'info');
    ?>
    <!-- footer -->
    <footer id="footer">
      <div class="footer__inner">
        <div class="footer-menu__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>"><span><i class="fas fa-home">トップページへ</i></span></a>
        </div>
        <div class="footer__content">
          <ul class="footer__nav">
            <nav id="globalnav">
              <?php if (has_nav_menu('footer')) : ?>
                <?php wp_nav_menu(array(
                    'theme_location'  => 'footer',
                    'container_class' => 'menu-container',
                  )); ?>
              <?php endif; ?>
          </ul>
          <small class="footer__copy">©2019
            <?php bloginfo('name'); ?></small>
        </div>
      </div><!-- end footer inner -->
    </footer>
    <?php wp_footer() ?>
    </body>

    </html>