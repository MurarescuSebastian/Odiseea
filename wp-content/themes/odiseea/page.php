<?php get_header(); ?>

<?php
if (is_page('contact')) {
    get_template_part('template-parts/page', 'contact');
}
if (is_page('despre')) {
    get_template_part('template-parts/page', 'aboutUs');
}
if (is_page('program-tarife')) {
    get_template_part('template-parts/page', 'programTarife');
}
if (is_page('blog')) {
    get_template_part('template-parts/page', 'blog');
}
?>

<?php if (!is_page('contact') && !is_page('despre') && !is_page('program-tarife') && !is_page('blog')) : ?>
    <div class="partener-section__container">
        <?php the_content() ?>
    </div>
<?php endif; ?>