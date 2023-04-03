<?php
/*
 * Template name: Portfolio
 */
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<?php get_template_part( 'template-parts/block', 'pageheader' ); ?>

<section>
    <div class="container">        
        <div class="page_content">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="masonry_portfolio">
            <?php foreach( $portfolio_page_items as $portfolio_item ) : ?>
                <div class="grid_sizer"></div>
                <div class="grid_item">
                    <img loading="lazy" src="<?= $portfolio_item['crb_portfolio_item_img'] ?>" alt="<?= $portfolio_item['crb_portfolio_item_alt'] ?>" title="<?= $portfolio_item['crb_portfolio_item_title'] ?>">                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/block', 'map' ); ?>

<section>
    <div class="container">
        <?php get_template_part( 'template-parts/form', 'horizontal' ); ?>
    </div>
</section>

<?php get_footer(); ?>