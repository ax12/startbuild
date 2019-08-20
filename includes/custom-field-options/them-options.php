<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make('theme_options', 'Настройки темы')
    ->set_icon('dashicons-admin-tools')
    ->add_tab(__('Хедер'), array(
        Field::make('text', 'crb_vk_link', __('Вконтакте'))
            ->set_width(30),
        Field::make('text', 'crb_instagam_link', __('Инстаграмм'))
            ->set_width(30),
        Field::make('separator', 'crb_separator', __('Настройки пользовательских скриптов')),

    ))
    ->add_tab(__('Скрипты'), array(
        Field::make('header_scripts', 'crb_header_script'),
        Field::make('footer_scripts', 'crb_footer_script'),

    ));