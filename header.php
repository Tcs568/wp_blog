<!DOCTYPE html>
<html lang=<?php languge_attributes(); ?> class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>商品.com</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ress.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <!-- wrapper -->
    <div class="wrapper">
      <!-- header -->
      <header id="header">
        <div class="header__inner">
          <div class="header__brand">
            <h1 class="brand__title"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></h1>
          </div>
          <?php wp_nav_menu();?>
          </div>
      </header>
</div>

</body>
</html>