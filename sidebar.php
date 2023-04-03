<?php include 'template-parts/variables.php' ?>

<div class="page_content_sidebar">
    <div class="sidebar_text">
        <p class="sidebar_title"><?= $sidebar_title ?></p>
        <p class="sidebar_subtitle"><?= $sidebar_description ?></p>
    </div>

    <?php get_template_part( 'template-parts/form', 'vertical' ); ?>

    <div class="sidebar_contacts"> 
        <?php if ($contacts_main_phone) :?><a class="sidebar_phone" href="tel:<?= $contacts_main_phone ?>"><?= $contacts_main_phone ?></a> <?php endif; ?>
        <?php get_template_part( 'template-parts/socials' ); ?>                                
    </div>
</div>