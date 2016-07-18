<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content'); ?>
                <?php endwhile; ?>
            <?php else :?>
                <?php  __('There is no posts for view')?>
            <?php endif; ?>
        </div><!-- /.blog-main -->
<?php get_footer(); ?>
