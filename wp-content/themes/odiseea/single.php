<?php get_header(); ?>

<div class="homePageHeader">
    <div class="homePageHeader_overlay"></div>
    <div class="homePageHeader_content container">
        <?php the_title('<h1 class="singlePage_title">', '</h1>'); ?>
    </div>
</div>

<div id="primary" class="singlePage">
    <main id="main" class="singlePageWrapper container" role="main">

        <?php
        while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('singlePageWrapper_article'); ?>>

                <div class="singlePageWrapper_article_content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'textdomain'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php the_tags('<span class="tag-links">', '', '</span>'); ?>
                </footer>
            </article>

        <?php
        // if (comments_open() || get_comments_number()) :
        //     comments_template();
        // endif;

        endwhile;
        ?>

    </main>
</div>