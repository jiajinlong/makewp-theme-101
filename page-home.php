<?php get_header(); ?>

   <div class="row">
            <?php

            $args_cat = array(
                'include'  =>  '15, 16, 14',
            );

            $categories = get_categories($args_cat);

            foreach($categories as $category) :

            $args = array(
                'type'  =>  'post',
                'posts_per_page'  =>  1,
                'category__in'    => $category->term_id,  // 只显示(包含)分类目录ID为15，16，14的文章。
                'category__not_in'  => 1,      //  排除显示分类目录ID为1的文章。只有1个分类目录，就不需要用数组表示
            );

            $lastBlog = new WP_Query($args);

            if ( $lastBlog->have_posts() ) :

                     while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                     <div class="col-xs-12 col-sm-4">
                             <?php get_template_part('content', 'featured'); ?>
                         </div>

                    <?php endwhile;

             endif;

              wp_reset_postdata();

            endforeach;


            ?>
    </div>

    <div class="row">
       <div class="col-xs-12 col-sm-8">

           <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile; ?>

            <?php endif; ?>

            <!-- // print other 2 posts not the first one-->
            <?php /*>
            <?php
               $args = array(
                'type'  =>  'post',
                'posts_per_page'  =>  2,
                'offset'  =>  1,
            );
            ?>
            <?php $lastBlog = new WP_Query($args); ?>

            <?php if ( $lastBlog->have_posts() ) : ?>

                      <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                        <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
            */ ?>
//            <hr>
            <!-- 只显示某一个文章分类 -->
            <?php /*
            <?php $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=1'); ?>

            <?php if ( $lastBlog->have_posts() ) : ?>

                      <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                        <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>

            <?php endif; ?>

           <?php wp_reset_postdata(); ?>
           */ ?>


       </div>


   <div class="col-xs-12 col-sm-4">
       <?php get_sidebar(); ?>
   </div>
</div>

<?php get_footer(); ?>
