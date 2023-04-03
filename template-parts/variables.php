<?php
  $head_code = carbon_get_theme_option( 'crb_head_code' );
  $footer_code = carbon_get_theme_option( 'crb_footer_code' );
  $title = carbon_get_theme_option( 'crb_main_title' );
  $description = carbon_get_theme_option( 'crb_main_description' );
  $org_name = carbon_get_theme_option( 'crb_org_name' );
  $contacts_main_phone_front = phone_front(carbon_get_theme_option( 'crb_main_phone' ));
  $contacts_add_phone_front = phone_front(carbon_get_theme_option( 'crb_second_phone' ));
  $contacts_main_phone_href = phone_href(carbon_get_theme_option( 'crb_main_phone' ));
  $contacts_add_phone_href = phone_href(carbon_get_theme_option( 'crb_second_phone' ));
  $contacts_mail = carbon_get_theme_option( 'crb_email' );
  $contacts_vk = carbon_get_theme_option( 'crb_vk' );
  $contacts_wa = phone_wa(carbon_get_theme_option( 'crb_wa' ));
  $contacts_tg = carbon_get_theme_option( 'crb_tg' );
  $contacts_inst = carbon_get_theme_option( 'crb_inst' );
  $contacts_fb = carbon_get_theme_option( 'crb_fb' );
  $address_city = carbon_get_theme_option( 'crb_address_city' );
  $address_street = carbon_get_theme_option( 'crb_address_street' );
  $address_building = carbon_get_theme_option( 'crb_address_build' );
  $address_zipcode = carbon_get_theme_option( 'crb_address_index' );
  $address_latitude = carbon_get_theme_option( 'crb_address_latitude' );
  $address_longitude = carbon_get_theme_option( 'crb_address_longitude' );
  $left_icons = carbon_get_theme_option( 'crb_main_icons_left' );
  $right_icons = carbon_get_theme_option( 'crb_main_icons_right' );
  $portfolio = carbon_get_theme_option( 'crb_portfolio' );
  $services = carbon_get_theme_option( 'crb_main_services' );
  $faq_title = carbon_get_theme_option( 'crb_main_faq_title' );
  $faq_items = carbon_get_theme_option( 'crb_main_faq' );
  $testimonials_title = carbon_get_theme_option( 'crb_main_testimonials_title' );
  $testimonial_items = carbon_get_theme_option( 'crb_testimonial' );
  $sidebar_title = carbon_get_theme_option( 'crb_sidebar_title' );
  $sidebar_description = carbon_get_theme_option( 'crb_sidebar_description' );
  $advantages = carbon_get_theme_option( 'crb_advantages' );
  $cf7 = carbon_get_theme_option( 'crb_cf7' );

  $portfolio_page_items = carbon_get_the_post_meta( 'crb_portfolio_page' );
  $text_404 = carbon_get_theme_option( 'crb_text_404' );
?>