<?php 

function happyshop_style() {

wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/assets/css/style.min.css' );
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function happyshop_scripts() {

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'menu-script', get_template_directory_uri() .'/dist/assets/js/app.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'happyshop_style' );
add_action( 'wp_enqueue_scripts', 'happyshop_scripts' );

if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
			do_action( 'wp_body_open' );
	}
}

add_action( 'after_setup_theme', 'woocommerce_support' );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('custom-background');
add_theme_support('custom-header');


function woocommerce_support() {
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
}

add_shortcode('phone', 'show_phone' );
function show_phone() {
  return get_option('phone');
}
	
// remove_theme_support( 'widgets-block-editor' );

require_once get_template_directory() . '/customProducts/class-wc-custom-product.php';
require_once get_template_directory() . '/customProducts/class-wc-add-custom-product.php';

WC_CUSTOM_PRODUCT::init();
WC_ADD_CUSTOM_PRODUCT::init();

add_filter( 'get_custom_logo_image_attributes', function(  
$custom_logo_attr, $custom_logo_id, $blog_id  )
{
    $custom_logo_attr['class'] = 'footer__logo';
$custom_logo_attr['id'] = 'header__logo';
    return $custom_logo_attr;
} ,10,3);


add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	if( $dosvg ){
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}


// function get_custom_post_type_template($single_template) {
// 	global $post;
// 	if ($post->post_type == 'product') {
// 	$single_template = dirname( __FILE__ ) . '/single-template.php';
// 	}
// 	return $single_template;
// 	}
// 	add_filter( 'single_template', 'get_custom_post_type_template' );
// 	// as well as following code include in template _include
// 	add_filter( 'template_include', 'shop_page_template', 99 );
// 	function shop_page_template( $template ) {
// 	if ( is_page( 'slug' ) ) {
// 	$new_template = locate_template( array( 'single-template.php' ) );
// 	if ( '' != $new_template ) {
// 	return $new_template ;
// 	}
// 	}
// 	return $template;
// 	}

// add_action( 'after_setup_theme', 'happyshop_add_woocommerce_support' );

// function remove_theme_support( $feature ) {
//     if ( in_array( $feature, array( 'editor-style',  ), true ) ) {
//         return false;
//     }
 
//     return _remove_theme_support( $feature );
// }

// remove_theme_support( 'widgets-block-editor' );
// remove_editor_styles('woocommerce-products-header__title');
// remove_editor_styles('page-title');
// remove_editor_styles('header');
// remove_editor_styles('baner');

// add_filter( 'get_custom_item_attributes', function(  
// 	$product)
// 	{
// 			$product['class']= '$product__item';

// 			return $product;
// 	} ,10,3);

			// add_filter( 'woocommerce_product_loop_start', 'woocommerce_product_columns_wrapper');

			// function  woocommerce_product_columns_wrapper( $loop_start ) {
			// 		return is_shop() ? '<ul class="container product__list">' . $loop_start : $loop_start;
			// }
			
			// add_action( 'woocommerce_product_loop_end', 'woocommerce_product_columns_wrapper_after');
			
			// function woocommerce_product_columns_wrapper_after( $loop_end ) {
			// 		return is_shop() ? $loop_end . '</ul>' : $loop_end;
			// }

			// function woocommerce_loop_product__title() {
			// 	echo '<h2 class="woocommerce-loop-product__title">' .mb_strimwidth( get_the_title(),0, 10, '...') . '</h2>'; 
			// }
	/**
 * Create categories for the given post.
 *
//  * @since 2.0.0
//  *
//  * @param string[] $categories Array of category names to create.
//  * @param int      $post_id    Optional. The post ID. Default empty.
//  * @return int[] Array of IDs of categories assigned to the given post.
//  */
// function wp_create_categories( $categories, $post_id = '' ) {
// 	$cat_ids = array();
// 	foreach ( $categories as $category ) {
// 		$id = category_exists( $category );
// 		if ( $id ) {
// 			$cat_ids[] = $id;
// 		} else {
// 			$id = wp_create_category( $category );
// 			if ( $id ) {
// 				$cat_ids[] = $id;
// 			}
// 		}
// 	}
// 	if ( $post_id ) {
// 		wp_set_post_categories( $post_id, $cat_ids );
// 	}
// 	return $cat_ids;
// }
