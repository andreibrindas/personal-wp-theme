<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 
$abrindas_includes = array(
    '/enqueue.php',                         // Enqueue scripts and styles.
    '/theme-support.php',                   // Theme supports
    
    
);
 
foreach ( $abrindas_includes as $file ) {
    require_once get_template_directory() . '/inc' . $file;
}
