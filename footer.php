        <?php get_template_part( 'template-parts/block', 'adv' ); ?>
        </main>
        <footer>
        <?php include 'template-parts/variables.php' ?>
            <div class="container footer_container">
              <div class="footer_logo logo_img">
                <?php the_custom_logo() ?> 
                <div class="footer_address">
                  
                </div>
              </div>
                <?php
                  $args = array(
                    'container'       => 'nav',          
                    'container_class' => 'footer_menu menu',           
                    'menu_class'      => 'footer_menu_list',          
                    'fallback_cb'     => 'wp_page_menu',            
                    'link_class'     => 'menu_link',           
                    'theme_location'  => 'footer_menu',
                    'add_li_class'    => 'menu_item',
                    'echo'          => false,               
                    );
                  $temp_menu = wp_nav_menu($args);
                  echo $temp_menu;
                ?>  
              <div class="footer_contacts">
                <div class="footer_contacts_top">
                  <a href="<?= $contacts_main_phone_href ?>"><?= $contacts_main_phone_front ?></a>
                  <a href="mailto:<?= $contacts_mail ?>"><?= $contacts_mail ?></a>
                </div>
                <div class="footer_contacts_bottom">                  
                  <?php get_template_part( 'template-parts/socials' ); ?>
                </div>                                  
              </div>              
            </div>
        </footer>    
    </body>
</html>

<?php wp_footer(); ?>