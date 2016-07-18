<?php
/**
 * Created by PhpStorm.
 * User: Vitnere
 * Date: 18-Jul-16
 * Time: 3:09 PM
 */
?>

<?php get_header(); ?>

<div class="container">


    <div class="row">
        <div class="col-sm-8 blog-main">

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="blog-post">
                        <h2 class="blog-post-title">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_content(); ?>
                    </div><!-- /.blog-post -->
                <?php endwhile; ?>
            <?php else :?>
                <?php  __('No page found')?>
            <?php endif; ?>

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Find me</h4>
                <ol class="list-unstyled">
                    <li><a href="https://github.com/Vitnere">GitHub</a></li>
                    <li><a href="https://ba.linkedin.com/in/nemanjakolarit">Linkedin</a></li>
                    <li><a href="http://nemanjakolar.bitballoon.com/">Portofolio</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
