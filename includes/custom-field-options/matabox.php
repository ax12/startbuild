<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Настройки главной страницы сайта "Апельсиновый Фазан"')
    ->show_on_template('page-main.php')
    ->add_fields(array(
        Field::make('text', 'crb_header_about', __('Заголовок первого раздела (о нас)'))->set_default_value('О нас')->set_required(true)
            ->set_width(30),
        Field::make('text', 'crb_button_name', __('Надпись на кнопке'))->set_default_value('Читать далее')->set_required(true)
            ->set_width(30),
        Field::make('text', 'crb_button_link', __('Ссылка на кнопке')) ->set_default_value('/about')->set_required(true)
            ->set_width(30),
        Field::make( 'rich_text', 'crb_about_description', __( 'Текст в первом разделе (о нас)' ) )
            ->set_width(100),
    ));

