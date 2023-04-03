<?php
/*
 * Template name: Contacts
 */
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<?php get_template_part( 'template-parts/block', 'pageheader' ); ?>

    <section>
        <div class="container">
            <div class="page_content_wrapper">
                <div class="page_content">
                   <?php the_content(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

<?php get_template_part( 'template-parts/block', 'portfolio' ); ?>

<?php get_template_part( 'template-parts/block', 'map' ); ?>

<?php get_footer(); ?>