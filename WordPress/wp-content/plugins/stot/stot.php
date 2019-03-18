<?php
/**
 * Plugin Name: stot 1C Import
 * Plugin URI: https://github.com/komstin/Website/blob/master/WordPress/wp-content/plugins/stot/stot.php
 * Description: Выгрузка товаров из 1С
 * Version: 0.1
 * Author: rifco
 * Author URI: https://rifco.ru
 */

add_action('admin_menu', 'CreateMyPluginMenu'); // 

function CreateMyPluginMenu()
{
    if (function_exists('add_options_page'))
    {
        add_options_page('Настройки загрузки', 'Загрузка товаров', 'manage_options', 'MypluginUniqIdentifictor', 'MyPluginPageOptions');
    }
}

function MyPluginPageOptions()
{
    echo "<h2>Настройки загрузки товаров</h2>";
}
?>
