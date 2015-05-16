<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>learn</title>
        <?php wp_head(); ?>
    </head>
    <?php if ( is_front_page() ) : $wp101_classes = array('wp101-class', 'my-class'); ?>
    <!--    注意区别'is_home'与'is_front_page'-->
    <?php else : $wp101_classes = array('no-wp101-class'); ?>
    <?php endif; ?>
    <body <?php body_class( $wp101_classes ); ?>>
        <?php wp_nav_menu(array(
            'theme_location'  =>  'primary',
        )); ?>
