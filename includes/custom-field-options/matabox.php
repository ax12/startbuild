<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Настройки главной страницы сайта "Апельсиновый Фазан"')
    ->show_on_template('page-main.php')
    ->add_fields(array(
        Field::make('map', 'crb_location')->set_position(37.423156, -122.084917, 14),

        Field::make('image', 'crb_photo'),
    ));