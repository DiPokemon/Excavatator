
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<?php while (have_posts()) : the_post();
    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    $image_title = get_the_title($image_id);
?>

<?php get_template_part( 'template-parts/block', 'pageheader' ); ?>

<section>
    <div class="container">
        <div class="page_content_wrapper post_content_wrapper">
            <div class="page_content post_content">
                <img loading="lazy" class="post_img" src="<?php the_post_thumbnail_url('full') ?>" alt="<?= $image_alt ?>" title="<?= $image_title ?>">
                <?php the_content(); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/block', 'portfolio' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>