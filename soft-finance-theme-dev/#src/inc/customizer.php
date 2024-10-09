<?php
/**
 * Soft Finance Theme Theme Customizer
 *
 * @package Soft_Finance_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function soft_finance_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'soft_finance_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'soft_finance_theme_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'soft_finance_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function soft_finance_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function soft_finance_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Привязывает обработчики JS для асинхронной перезагрузки изменений предварительного просмотра Настройщика темы.
 */
function soft_finance_theme_customize_preview_js() {
	wp_enqueue_script( 'soft-finance-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'soft_finance_theme_customize_preview_js' );



/*************************************************************
*	Отключает Гутенберг (новый редактор блоков в WordPress).
*	ver: 1.2
**************************************************************/

if( 'disable_gutenberg' ){
	remove_theme_support( 'core-block-patterns' ); // WP 5.5

	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	// отключим подключение базовых css стилей для блоков
	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}


/************************************************************
* Удалить type="text/javascript" и type="text/css"  
*************************************************************/
  
add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
    $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
    $buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );
    return $buffer;
    });
});

/************************************************************
* PAGESPEED Удалить лишние ссылки с хэдера  
*************************************************************/ 
 
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/************************************************************
* Закроем возможность публикации через xmlrpc.php
*************************************************************/ 
 
add_filter('xmlrpc_enabled', '__return_false');


/************************************************************
* Ограничить кол-во ревизий до 5: 
*************************************************************/ 
 
if( ! defined('WP_POST_REVISIONS') ) define('WP_POST_REVISIONS', 3);

/*************************************************************
* Удаляем ненужные размеры изображений при загрузке
*************************************************************/ 
 
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'1536x1536',
		'2048x2048',
		'woocommerce_gallery_thumbnail',
		'shop_thumbnail', 
	] );
}



/*************************************************************
* Удаляем лишние классы
************************************************************ 
 
function wp_nav_menu_attributes_filter($var) { 
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : ''; 
} 
add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1); 
add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1); 
add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);

*/


/*************************************************************
* Отключение стилей WooCommerce по умолчанию:
*************************************************************/ 
 
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



/*************************************************************
* Подключение стилей и скриптов WooCommerce только на страницах магазина:
*************************************************************/ 
 
add_action( 'wp_enqueue_scripts', 'wc_styles_scripts', 99 );
function wc_styles_scripts() {

    if ( function_exists( 'is_woocommerce' ) ) {
        if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() && ! is_account_page() ) {

            wp_dequeue_style('woocommerce-layout');
            wp_dequeue_style('woocommerce-smallscreen');
            wp_dequeue_style('woocommerce-general');
            wp_dequeue_style('evolution-woostyles');
			wp_dequeue_style('soft-finance-theme-woocommerce-style-css');
			wp_dequeue_style('soft-finance-theme-woocommerce-style-inline-css');

            wp_dequeue_script('wc_price_slider');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-add-to-cart');
            wp_dequeue_script('wc-cart-fragments');
            wp_dequeue_script('wc-checkout');
            wp_dequeue_script('wc-add-to-cart-variation');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-cart');
            wp_dequeue_script('wc-chosen');
            wp_dequeue_script('woocommerce');
            wp_dequeue_script('prettyPhoto');
            wp_dequeue_script('prettyPhoto-init');
            wp_dequeue_script('jquery-blockui');
            wp_dequeue_script('jquery-placeholder');
            wp_dequeue_script('fancybox');
            wp_dequeue_script('jqueryui');
        }
    }
}

/*************************************************************
* Отключить лишние p и br CF7
*************************************************************/ 

add_filter('wpcf7_form_elements', function($content) {
	$content =  preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
		return $content;
});

add_filter('wpcf7_autop_or_not', '__return_false');



/*************************************************************
* Страница настроек ACF
*************************************************************/ 

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Настройки темы',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}