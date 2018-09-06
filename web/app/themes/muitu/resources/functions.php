<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);
    ///////
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page();
        
    }
    /////Esto traduce el view cart

    /**
 * Change text strings
 *
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/gettext
 */
function my_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Ver carrito' :
            $translated_text = __( 'Agregaste este producto ¿Quieres ver el Carrito?', 'woocommerce' );
            break;
        case 'Log in' :
            $translated_text = __( 'Entrar', 'woocommerce' );
            break;
        case 'Cart totals' :
        $translated_text = __( 'Total del carrito', 'woocommerce' );
            break;
        case 'Proceed to checkout' :
        $translated_text = __( 'Proceder a revision', 'woocommerce' );
            break;
        case 'Shipping' :
        $translated_text = __( 'Envio', 'woocommerce' );
            break;
        case 'Sort By' :
        $translated_text = __( 'Ordenar por', 'woocommerce' );
            break;
        case 'Price Range' :
        $translated_text = __( 'Rango de precio', 'woocommerce' );
            break;
        case 'Categories' :
        $translated_text = __( 'Categorias', 'woocommerce' );
            break;
        case 'None' :
        $translated_text = __( 'Ninguna', 'woocommerce' );
            break;
        case 'Review Count' :
        $translated_text = __( 'Recuento de revisión', 'woocommerce' );
            break;
        case 'Popularity' :
        $translated_text = __( 'Popularidad', 'woocommerce' );
            break;
        case 'Average rating' :
        $translated_text = __( 'Puntuación media', 'woocommerce' );
            break;
        case 'Newness' :
        $translated_text = __( 'Novedad', 'woocommerce' );
            break;
        case 'Price: low to high' :
        $translated_text = __( 'Precios de Menor a Mayor', 'woocommerce' );
            break;
        case 'Price: high to low' :
        $translated_text = __( 'Precio: de Mayor a Menor', 'woocommerce' );
            break;
        case 'Random Products' :
        $translated_text = __( 'Productos Aleatorios', 'woocommerce' );
            break;
        case 'Product Name' :
        $translated_text = __( 'Alfabeticamente', 'woocommerce' );
            break;
        case 'Related products' :
        $translated_text = __( 'Productos relacionados', 'woocommerce' );
            break;
        case 'has been added to your cart.' :
        $translated_text = __( 'Ha sido agregado a tu carro', 'woocommerce' );
            break;
        case 'Company name' :
        $translated_text = __( 'Nombre de empresa', 'woocommerce' );
            break;
        case '(optional)' :
        $translated_text = __( '(Opcional)', 'woocommerce' );
            break;
        case 'Street address' :
        $translated_text = __( 'Dirección', 'woocommerce' );
            break;
        case 'Apartment, suite, unit etc. (optional)' :
        $translated_text = __( 'Apartamento, suite, unidad, etc. (opcional)', 'woocommerce' );
            break;
        case 'Email address' :
        $translated_text = __( 'Dirección de correo electrónico', 'woocommerce' );
            break;
        case 'Ship to a different address?' :
        $translated_text = __( '¿Envia a una direccion diferente?', 'woocommerce' );
            break;
        case 'Notes about your order, e.g. special notes for delivery.' :
        $translated_text = __( 'Notas especiales para la entrega.', 'woocommerce' );
            break;
        case 'Shipping' :
        $translated_text = __( 'Envio', 'woocommerce' );
            break;

        case 'Billing details' :
        $translated_text = __( 'Detalles de facturación', 'woocommerce' );
            break;
        case 'Direct bank transfer' :
        $translated_text = __( 'Transferencia bancaria directa', 'woocommerce' );
            break;
        case 'Gracias. Tu pedido ha sido recibido.' :
        $translated_text = __( '¡Gracias por su compra!. Su pedido ha sido recibido con exito. Si precisa cualquier aclaracion o tiene alguna duda, use el formulario de CONTACTANOS para hacernos llegar su consulta. En breve nos pondremos en contacto con usted para confirmar su pedido y cuando le sera enviado. ', 'woocommerce' );
            break;
        case 'PayPal Express Checkout' :
        $translated_text = __( 'PayPal Pago exprés', 'woocommerce' );
            break;
 
        case 'privacy policy' :
        $translated_text = __( 'Politicas de Privacidad', 'woocommerce' );
            break;

        case 'Continue to payment' :
        $translated_text = __( 'Continuar con el pago', 'woocommerce' );
            break;
        case 'Undo?' :
        $translated_text = __( '¿Deshacer?', 'woocommerce' );
        break;
        case 'Return to shop' :
        $translated_text = __( 'Tienda', 'woocommerce' );
        break;
        case 'From your account dashboard you can view your ':
        $translated_text = __( 'Desde el panel de su cuenta puede ver su', 'woocommerce-page' );
        break;
        case 'recent orders':
        $translated_text = __( 'ordenes recientes', 'woocommerce-page' );
        break;
        case ', manage your ':
        $translated_text = __( 'administrar su', 'woocommerce-page' );
        break;
    }
    return $translated_text;
}

add_filter( 'gettext', 'my_text_strings', 20, 3 );

////
add_filter( 'wc_add_to_cart_message', 'wdo_custom_wc_add_to_cart_message', 10, 2 ); 
 
function wdo_custom_wc_add_to_cart_message( $message, $product_id ) { 
    $message = sprintf(esc_html__('« %s » ha sido agregado al carrito','tm-organik'), get_the_title( $product_id ) ); 
    return $message; 
}

add_filter( 'woocommerce_shipping_package_name', 'custom_shipping_package_name' );
function custom_shipping_package_name( $name ) {
  return 'Envio';
}

