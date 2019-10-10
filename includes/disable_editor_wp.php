<?php

//Для отключения визуального редактора TinyMCE на
// определённых страницах или постах, нужно добавить в
// файл functions.php вашего активного
// WordPress шаблона следующий код:


function disable_content_editor()
{

    if (isset($_GET['post'])) {
        $post_ID = $_GET['post'];
    } else if (isset($_POST['post_ID'])) {
        $post_ID = $_POST['post_ID'];
    }

    if (!isset($post_ID) || empty($post_ID)) {
        return;
    }

//    /*
//     * Полностью отключить редактор WordPress для страницы с определённым ID (в нашем примере с ID = 15)
//     */
//    if ($post_ID == 15) {
//        remove_post_type_support('page', 'editor');
//    }
//
//    /*
//     * Отключить возможность редактирования для всех страниц (т.е. для всех постов с типом "страница")
//     */
//    $post_type = get_post_type($post_ID);
//    if ($post_type == 'page') {
//        return false;
//    }
//
//    /*
//     * Отключить возможность редактирования для страниц с ID 16, 25 и 30 (для случаев, когда нужно отключить редактор сразу для нескольких страниц)
//     */
//    $disabled_IDs = array(16, 25, 30);
//    if (in_array($post_ID, $disabled_IDs)) {
//        remove_post_type_support('page', 'editor');
//    }

    /*
     * Скрыть редактор ВордПресс на страницах с определённым шаблоном (!!!ВНИМАНИЕ!!! указывать нужно не название шаблона, а имя его файла, например my_page_template.php)
     */
    $page_template = get_post_meta($post_ID, '_wp_page_template', true);
    if ($page_template == 'page-main.php') { //отключил на главной
        remove_post_type_support('page', 'editor');
    }
}

add_action('admin_init', 'disable_content_editor');