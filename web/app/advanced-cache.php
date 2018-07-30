<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = 'C:\Ampps\www\wordpress\bedrock/web/app/cache/wp-rocket/';
$rocket_config_path = 'C:\Ampps\www\wordpress\bedrock/web/app/wp-rocket-config/';

if ( file_exists( 'C:\Ampps\www\wordpress\bedrock\web\app\plugins\wp-rocket\inc\front/process.php' ) ) {
	include 'C:\Ampps\www\wordpress\bedrock\web\app\plugins\wp-rocket\inc\front/process.php';
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}