<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')) :?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif;?>
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

<footer class="blog-footer">
    <p>&copy; <?php echo Date('Y')?> - <?php bloginfo('name'); ?></p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>


