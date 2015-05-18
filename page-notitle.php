<?php
/*
    Template Name: Page No Title
*/
?>

<?php get_header(); ?>
   <div class="row">
       <div class="col-xs-12 col-sm-8">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2>这是静态页面。</h2>
            <small>发布时间: <?php the_time('Y-n-j H:i'); ?> 分类: <?php the_category(); ?></small>
            <p><?php the_content(); ?></p>
            <hr>
        <?php endwhile; ?>
    <?php endif; ?>
       </div>
     <div class="col-xs-12 col-sm-4">
       <?php get_sidebar(); ?>
   </div>
</div>
<?php get_footer(); ?>
