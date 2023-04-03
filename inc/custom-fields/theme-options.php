<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make( 'theme_options', __( 'Theme options', 'tattoo_theme' ) )
    ->set_icon( 'dashicons-welcome-learn-more' )    
    ->add_tab( __( 'Доп. код и тексты', 'tattoo_theme' ), array(
        Field::make( 'header_scripts', 'crb_head_code', __('Код в HEAD', 'tattoo_theme')),
        Field::make( 'footer_scripts', 'crb_footer_code', __('Код в FOOTER', 'tattoo_theme')),
        Field::make( 'textarea', 'crb_text_404', __('Текст на стр. 404', 'tattoo_theme') ),                           
    ) )
    ->add_tab( __( 'Контакты', 'tattoo_theme' ), array(
        Field::make( 'text', 'crb_org_name', __('Название организации', 'tattoo_theme')),
        Field::make( 'text', 'crb_main_phone', __( 'Основной телефон', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' )            
            ->set_width(33),
        Field::make( 'text', 'crb_email', __( 'E-mail', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', 'example@example.com' )  
            ->set_width(33),
        Field::make( 'text', 'crb_second_phone', __( 'Доп. телефон', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' ) 
            ->set_width(33),
        Field::make( 'text', 'crb_vk', __( 'Вконтакте', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', 'vk.com/example' )
            ->set_width(33),
        Field::make( 'text', 'crb_tg', __( 'Телеграм', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', 'example' )
            ->set_width(33),
        Field::make( 'text', 'crb_wa', __( 'WhatsApp', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', '7**********' )
            ->set_width(33),
        Field::make( 'text', 'crb_inst', __( 'Инстаграм', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', 'instagram.com/example' )
            ->set_width(33),
        Field::make( 'text', 'crb_fb', __( 'Фейсбук', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', 'facebook.com/example' )
            ->set_width(33),
        Field::make( 'text', 'crb_cf7', __( 'Контактная форма', 'tattoo_theme' ) )
            ->set_attribute( 'placeholder', '[contact-form-7 id="1" title="Контактная форма 1"]' )  
            ->set_width(33),
    ) )
    ->add_tab( __( 'Адрес', 'tattoo_theme' ), array(
        Field::make( 'text', 'crb_address_city', __( 'Город', 'tattoo_theme' ) )
            ->set_width(50),
        Field::make( 'text', 'crb_address_street', __( 'Улица', 'tattoo_theme' ) )
            ->set_width(50),
        Field::make( 'text', 'crb_address_build', __( 'Дом', 'tattoo_theme' ) )
            ->set_width(50),
        Field::make( 'text', 'crb_address_index', __( 'Индекс', 'tattoo_theme' ) )
            ->set_width(50),
        Field::make( 'text', 'crb_address_latitude', __( 'Широта (для карты)', 'tattoo_theme' ) )
            ->set_width(50),
        Field::make( 'text', 'crb_address_longitude', __( 'Долгота (для карты)', 'tattoo_theme' ) )
            ->set_width(50),
    ) );

Container::make( 'theme_options', __( 'Main page', 'tattoo_theme' ) )
    ->set_page_parent( $basic_options_container )
    ->add_tab( __( 'Основное', 'tattoo_theme' ), array(
        Field::make( 'text', 'crb_main_title',  __('Заголовок H1', 'tattoo_theme') ),
        Field::make( 'textarea', 'crb_main_description',  __('Описание', 'tattoo_theme') )
    ) ) 

    ->add_tab( __( 'Фоновые иконки', 'tattoo_theme' ), array(
        Field::make( 'complex', 'crb_main_icons_left',  __('Иконки слева', 'tattoo_theme') )
            ->add_fields( 'crb_main_icons_left', __('Иконки слева', 'tattoo_theme'), array(                
                Field::make( 'image', 'crb_main_icon_img', __( 'Иконка', 'tattoo_theme' ) )
                    ->set_value_type( 'url' ),                    
                Field::make( 'text', 'crb_main_icon_alt', __( 'Alt', 'tattoo_theme' ) )
                    ->set_width(50),
                Field::make( 'text', 'crb_main_icon_title', __( 'Title', 'tattoo_theme' ) )
                    ->set_width(50),
            ) )           
            ->set_width(50)
            ->set_max(7),
            
        Field::make( 'complex', 'crb_main_icons_right', __('Иконки справа', 'tattoo_theme') )
            ->add_fields( 'crb_main_icons_left', __('Иконка', 'tattoo_theme'), array(                
                Field::make( 'image', 'crb_main_icon_img', __( 'Иконка', 'tattoo_theme' ) )
                    ->set_value_type( 'url' ),                    
                Field::make( 'text', 'crb_main_icon_alt', __( 'Alt', 'tattoo_theme' ) )
                    ->set_width(50),
                Field::make( 'text', 'crb_main_icon_title', __( 'Title', 'tattoo_theme' ) )
                    ->set_width(50),
            ) )           
            ->set_width(50)
            ->set_max(7),
           
        ) )

    ->add_tab( __( 'Слайдеры', 'tattoo_theme' ), array(
        Field::make( 'complex', 'crb_portfolio', __( 'Портфолио', 'tattoo_theme' ))
            ->add_fields( array(
                Field::make( 'image', 'crb_portfolio_img', __('Фото', 'tattoo_theme') )
                    ->set_value_type( 'url' )
                    ->set_width(33),
                Field::make( 'text', 'crb_portfolio_alt', __('Alt', 'tattoo_theme') )
                    ->set_width(33),
                Field::make( 'text', 'crb_portfolio_title', __('Title', 'tattoo_theme') )
                    ->set_width(33),
            ) ),
        Field::make( 'complex', 'crb_advantages', __( 'Преимущества', 'tattoo_theme' ))
            ->add_fields( array(
                Field::make( 'text', 'crb_adv_digit', __('Число', 'tattoo_theme') )
                    ->set_attribute('type', 'number')                    
                    ->set_width(33),
                Field::make( 'text', 'crb_adv_text', __('Текст', 'tattoo_theme') )
                    ->set_width(67),
            ) )
    ) )    

    ->add_tab( __( 'Услуги', 'tattoo_theme' ), array(
        Field::make( 'complex', 'crb_main_services', __('Услуга', 'tattoo_theme') )
            ->add_fields( array(
                Field::make( 'text', 'crb_main_service_title', __('Заголовок', 'tattoo_theme') )
                    ->set_width(30),
                Field::make( 'rich_text', 'crb_main_service_text', __('Текст', 'tattoo_theme') )
                    ->set_width(70),
            ) )        
    ) )

    ->add_tab( __( 'FAQ', 'tattoo_theme' ), array(
        Field::make( 'text', 'crb_main_faq_title', __('Заголовок секции FAQ', 'tattoo_theme')),
        Field::make( 'complex', 'crb_main_faq', __('Вопрос/Ответ', 'tattoo_theme') )
            ->add_fields( array(
                Field::make( 'text', 'crb_main_question', __('Вопрос', 'tattoo_theme') )
                    ->set_width(50),
                Field::make( 'textarea', 'crb_main_answer', __('Ответ', 'tattoo_theme') )
                    ->set_rows(1)
                    ->set_width(50),
            ) )        
    ) );

Container::make('theme_options',__( 'Testimonials', 'tattoo_theme' ) )
    ->set_page_parent( $basic_options_container )
    ->add_fields(array(
        Field::make( 'text', 'crb_main_testimonials_title', __('Заголовок секции отзывов', 'tattoo_theme')),
        Field::make('complex','crb_testimonial',__('Отзыв', 'tattoo_theme'))
            ->add_fields(array(
                Field::make('image','crb_testimonial_img',__('Фото', 'tattoo_theme') )
                    ->set_value_type( 'url' )
                    ->set_width(33),
                Field::make('text','crb_testimonial_name',__('Имя', 'tattoo_theme') )
                    ->set_width(33),
                Field::make('text','crb_testimonial_second_name',__('Фамилия', 'tattoo_theme') )
                    ->set_width(33),
                Field::make('textarea','crb_testimonial_text',__('Текст', 'tattoo_theme'))
                    ->set_width(60)
                    ->set_rows(1),
                Field::make('date','crb_testimonial_date',__('Дата', 'tattoo_theme'))
                    ->set_width(30),
                Field::make('text','crb_testimonial_rating',__('Оценка', 'tattoo_theme'))
                    ->set_attribute('type', 'number')
                    ->set_attribute('min', '0')
                    ->set_attribute('max', '5')
                    ->set_width(10),
            ))
     ) );

Container::make('theme_options',__( 'Sidebar', 'tattoo_theme' ) )
     ->set_page_parent( $basic_options_container )
     ->add_fields(array(
        Field::make( 'text', 'crb_sidebar_title', __('Sidebar title', 'tattoo_theme'))
            ->set_width(50),
        Field::make( 'textarea', 'crb_sidebar_description', __('Sidebar description', 'tattoo_theme'))
            ->set_width(50)
            ->set_rows(1),
         
             
      ) ); 