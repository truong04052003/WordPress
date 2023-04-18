<?php
/*
 Plugin Name: ZendVN OptionAPI
Plugin URI: http://www.zend.vn
Description: Tim hieu ve qua trinh chuan xay dung Plugin.
Author: ZendVN group
Version: 1.0
Author URI: http://www.zend.vn
*/

define('ZENDVN_MP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ZENDVN_MP_IMAGES_URL', ZENDVN_MP_PLUGIN_URL . '/images');

define('ZENDVN_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ZENDVN_MP_VIEWS_DIR', ZENDVN_MP_PLUGIN_DIR . '/views');

if(!is_admin()){
	require_once ZENDVN_MP_PLUGIN_DIR . './includes/public.php';
	new ZendvnMp();
}else{
	require_once ZENDVN_MP_PLUGIN_DIR . './includes/admin.php';
	new ZendvnMpAdmin();
}