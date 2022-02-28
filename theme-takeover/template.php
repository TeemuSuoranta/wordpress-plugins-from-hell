<?php
/**
 * Template for Theme Takeover
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="site">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
