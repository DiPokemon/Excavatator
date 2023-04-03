<?php include 'variables.php' ?>
<section>
    <div class="container">
        <div class="slider_wrapper">
            <div class="portfolio_slider">
                <?php foreach( $portfolio as $portfolio_item ) : ?>
                    <img loading="lazy" src="<?= $portfolio_item['crb_portfolio_img']; ?>" alt="<?= $portfolio_item['crb_portfolio_alt']; ?>" title="<?= $portfolio_item['crb_portfolio_title']; ?>">
                <?php endforeach; ?>
            </div>
        </div>  
    </div>
</section>
