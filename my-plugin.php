<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: https://www.example.com/
 * Description: A brief description of the plugin.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://www.example.com/
 */

// Modülün çalıştığından emin olmak için bir test metodu
function my_plugin_test() {
    echo "My Plugin is activated!";
}

// Özel bir kısayol oluşturma
function my_plugin_shortcode($atts) {
    $a = shortcode_atts(array(
        'text' => 'Default Text',
        'welcome' => 'Sitemize hoş geldiniz!'
    ), $atts);

    return 'Örnek Mesaj ' . $a['welcome'];
}

// WordPress'in "init" olayı tetiklendiğinde test metodunu ve kısayolu çalıştırın
add_action('init', 'my_plugin_test');
add_shortcode('my_plugin_shortcode', 'my_plugin_shortcode');