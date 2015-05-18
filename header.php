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
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <nav class="navbar navbar-default">
                       <div class="container-fluid">
                          <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="navbar-header">
                               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                               </button>
                               <a href="#" class="navbar-brand">Wp101 Theme</a>
                           </div>
                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                               <?php
                                  wp_nav_menu(array(
                                      'theme_location'  =>  'primary',
                                      'container'       =>  false,
                                      'menu_class'      =>  'nav navbar-nav navbar-right'
                                      )
                                  );
                               ?>
                           </div>
                       </div><!-- /.container-fluid -->
                   </nav>
               </div>
           </div>
       </div>

