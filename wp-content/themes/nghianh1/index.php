<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php echo bloginfo('charset') ?>" >
    <?php echo wp_head(); ?> <!--allow wp add header-->
</head>
<body <?php echo body_class('sample'); ?> >
    <?php echo wp_body_open(); ?> <!--allow add wp hook-->
    <p>Hello Nghia!</p>

    <?php echo wp_footer(); ?> <!--allow wp add footer-->
</body>
</html>