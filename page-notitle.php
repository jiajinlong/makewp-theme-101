<?php
/*
    Template Name: Page No Title
*/
?>
   <?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2>这是静态页面。</h2>
            <small>发布时间: <?php the_time('Y-n-j H:i'); ?> 分类: <?php the_category(); ?></small>
            <p><?php the_content(); ?></p>
            <hr>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
