<?php get_header(); ?>

<div class="blog">
    <div class="blogWrapper container">
        <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

                <div class="blogWrapper_card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="blogWrapper_card_thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>

            <?php endwhile;

            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e('No posts found.', 'text-domain'); ?></p>
        <?php endif; ?>
    </div>
</div>