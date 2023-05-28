<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>" >
    <?php wp_head(); ?> <!--allow wp add header-->
</head>
<body <?php body_class('sample-acb'); ?> >
    <?php wp_body_open(); ?> <!--allow add wp hook-->
    <p>Hello Nghia!</p>

    <?php wp_footer(); ?> <!--allow wp add footer-->
</body>
</html>