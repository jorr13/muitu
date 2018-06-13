<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }



    //Controlador para las comunidades

    function comunidadesLoop()
    {
        $comunidades = get_posts([
            'posts_per_page'=>'10',
            'post_parent' => '40',
            'post_type' => 'page',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $comunidades);
    }
    
    //Controlador para los posts

    function postsLoop()
    {
        $posts = get_posts([
            'post_type' => 'post',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $posts);
    }

//Controlador para los productos

function productsLoop()
{
    $products = get_posts([
        'post_type' => 'product',

    ]);
    return array_map(function ($post) {
        return [
            'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            'title' => get_the_title($post->ID),
            'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
            'link' => get_permalink($post->ID),
            'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
            'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
            'tags' => get_tags($post->ID)    
        ];
    }, $products);
}
//hamacas
function categoryLoop()
{
    $category = get_posts([
        'post_type' => 'product',
        'product_cat' => 'hamaca',
    ]);

    return array_map(function ($post) {
        return [
            'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            'title' => get_the_title($post->ID),
            'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
            'link' => get_permalink($post->ID),
            'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
            'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
            'tags' => get_tags($post->ID)    
        ];
    }, $category);
}
//bolsos
function bolsosLoop()
{
    $bolsos = get_posts([
        'post_type' => 'product',
        'product_cat' => 'bolsos',
    ]);

    return array_map(function ($post) {
        return [
            'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            'title' => get_the_title($post->ID),
            'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
            'link' => get_permalink($post->ID),
            'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
            'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
            'tags' => get_tags($post->ID)    
        ];
    }, $bolsos);
}
//cinturones
function cinturonesLoop()
{
    $cinturones = get_posts([
        'post_type' => 'product',
        'product_cat' => 'cinturones',
    ]);

    return array_map(function ($post) {
        return [
            'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            'title' => get_the_title($post->ID),
            'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
            'link' => get_permalink($post->ID),
            'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
            'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
            'tags' => get_tags($post->ID)    
        ];
    }, $cinturones);
}
//pulceras
function pulcerasLoop()
{
    $pulceras = get_posts([
        'post_type' => 'product',
        'product_cat' => 'pulceras',
    ]);

    return array_map(function ($post) {
        return [
            'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            'title' => get_the_title($post->ID),
            'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
            'link' => get_permalink($post->ID),
            'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
            'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
            'tags' => get_tags($post->ID)    
        ];
    }, $pulceras);
}
//quienes somos
}


    //Jugueticos para hacer mas rico todo
    add_post_type_support( 'page', 'excerpt' );