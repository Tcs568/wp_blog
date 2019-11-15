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
                    <li class="footer__list">
                      <a class="list__link" href="get_page_link($contact)">お問い合わせ</a>
                    </li>
                  </ul>
                  <small class="footer__copy">Copyright ©
                    <?php bloginfo('name'); ?>
                    All Rights Reserved.</small>
                </div>
              </div><!-- end footer inner -->
            </footer>
            <?php wp_footer() ?>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
            <script src="main.js"></script>
            </body>

            </html>