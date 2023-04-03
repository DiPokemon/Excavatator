<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Фотографии в портфолио' )
    ->show_on_template('portfolio.php')
    ->where( 'post_type', '=', 'page' )   
    ->add_fields( array(
        Field::make( 'complex', 'crb_portfolio_page',  __('Портфолио', 'tattoo_theme') )
            ->add_fields( 'crb_portfolio_page_items', __('Элементы', 'tattoo_theme'), array(                
                Field::make( 'image', 'crb_portfolio_item_img', __( 'Фото', 'tattoo_theme' ) )
                    ->set_value_type( 'url' )
                    ->set_width(20),                    
                Field::make( 'text', 'crb_portfolio_item_alt', __( 'Alt', 'tattoo_theme' ) )
                    ->set_width(40),
                Field::make( 'text', 'crb_portfolio_item_title', __( 'Title', 'tattoo_theme' ) )
                    ->set_width(40),
            ) )
    ));