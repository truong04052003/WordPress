<?php
require_once ZENDVN_MP_PLUGIN_DIR . '/includes/support.php';
class ZendvnMp{
	
	public function __construct(){
		echo '<br/>' . __METHOD__;
		//=====================================================
		//1. Ham thay doi toan bo title trong hook 'the_title'
		//=====================================================
		//add_filter('the_content', array($this,'theTitle'),123);
		
		//=====================================================
		//2. Hiển thị các Action đang thực thi trong Hook
		//=====================================================
		add_action('wp_footer', array($this,'showFunction'));		
	
		//=====================================================
		//3. Kiem tra su ton tai cua Filter trong Hook
		//=====================================================
		echo '<br/>' . has_filter('the_content','convert_smilies');
		echo '<br/>' . has_filter('the_content',array($this,'theTitle'));
		
		if(has_filter('the_content','convert_smilies')!=null){
			remove_filter('the_content','convert_smilies');
			add_filter('the_content',array($this,'newSmilies'));
		}
		
		
	}	
	
	public function newSmilies($content){
		//Xu ly ma lenh $content
		return $content;
	}
	//=====================================================
	//2. Hiển thị các Action đang thực thi trong Hook
	//=====================================================
	public function showFunction(){
		ZendvnMpSupport::showFunc('the_content');
	}
		
	//=====================================================
	//1. Ham thay doi toan bo title trong hook 'the_title'
	//=====================================================
	public function theTitle(){
		$str = 'Thay doi tieu cua bai viet';
		return $str;
	}
}