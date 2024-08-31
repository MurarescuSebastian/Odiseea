<?php get_header(); ?>
<div class="page-not-found">
    <div class="message-404">
        404
    </div>
    <div class="text-error">
        Sorry, the page you were looking for was not found
    </div>
    <div class="redirect-home">
        <a href="<?php echo get_bloginfo('url') ?>">
            Go to the homepage
        </a>
    </div>
</div>
<?php get_footer(); ?>