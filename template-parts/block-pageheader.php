<?php include 'variables.php' ?>
<section>
    <div class="container page_header">
        <h1 class="page_title"><?php the_title(); ?></h1>
        <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?> 
    </div>
</section>