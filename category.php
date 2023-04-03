<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<section>
    <div class="container page_header">
        <h1 class="page_title"><?php single_cat_title(); ?></h1>
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?> 
    </div>
</section>

<section>
    <div class="container">
        <div class="posts_grid">
            <?php
                $category = get_queried_object();
                $query = new WP_Query(
                    array(
                        'post_type'      => 'post', 
                        'post_status'    => 'publish', 
                        'posts_per_page' => -1, 
                        'cat'            => $category->cat_ID
                    )
                );
                if ($query->have_posts()) {
            ?> 

                <?php 
                    while ($query->have_posts()) {
                        $query->the_post(); 
                        if (is_null(get_the_post_thumbnail_url()) || empty(get_the_post_thumbnail_url()))
                            $post_thumbnail_url = get_template_directory_uri().'/static/img/empty_img.png';
                        else
                        $post_thumbnail_url = get_the_post_thumbnail_url();
                ?>

                    <a href="<?php the_permalink(); ?>" class="post_item">
                        <div class="post_item_top">
                            <img loading="lazy" class="post_img" loading="lazy" src="<?= $post_thumbnail_url ?>" alt="<?php the_title(); ?>">
                            <h2 class="post_title"><?php the_title(); ?></h2>
                        </div>
                        <div class="post_desc"><?php the_excerpt(); ?></div>
                    </a>  

                <?php } ?>	                                
            <?php }	?> 

        </div>
    </div>
</section>

<section>
    <div class="container">
        <?php get_template_part( 'template-parts/form', 'horizontal' ); ?>
    </div>
</section>

<section>
    <div class="container">
        <?= category_description() ?>
    </div>
</section>

<?php get_template_part( 'template-parts/block', 'portfolio' ); ?>

<?php get_footer(); ?>