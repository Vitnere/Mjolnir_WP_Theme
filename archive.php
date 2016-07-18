<?php
/**
 * Created by PhpStorm.
 * User: Vitnere
 * Date: 18-Jul-16
 * Time: 3:38 PM
 */
?>

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

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->


        <?php get_footer(); ?>
