<?php include 'variables.php' ?>
<section>
    <div class="container map_container">
        <div class="half_column map_wrapper" id="map" data-address="<?= $address_city ?>, <?= $address_street ?>, <?= $address_building ?>" data-latitude="<?= $address_latitude ?>" data-longitude="<?= $address_longitude ?>" data-name="<?= $org_name ?>" data-phonefront="<?= $contacts_main_phone_front ?>" data-phonehref="<?= $contacts_main_phone_href ?>"></div>    
        <div class="half_column contacts_block">  
            <?php get_template_part( 'template-parts/form', 'vertical' ); ?>       
            <div class="address"><?= $address_city ?>, <?= $address_street ?>, <?= $address_building ?></div>  
            <div class="phones">
                <span><a href="<?= $contacts_main_phone_href ?>"><?= $contacts_main_phone_front ?></a></span>
                <span><a href="<?= $contacts_add_phone_href ?>"><?= $contacts_add_phone_front ?></a></span>
            </div>
            <?php get_template_part( 'template-parts/socials' ); ?>
        </div>
    </div>
</section>
