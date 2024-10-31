<?php
/*
Plugin Name: QQWorld Cloud Storage
Plugin URI: https://wordpress.org/plugins/qqworld-cloud-storage/
Description: Support Alibaba Cloud OSS, Tencent Cloud COS, Seven Niu Cloud Storage, Cloud Cloud Storage, Baidu Cloud BOS and all cloud storage that supports mirroring back to the source.
Version: 1.0.3
Author: Michael Wang
Author URI: https://www.qqworld.org
Text Domain: qqworld-cloud-storage
*/

define('QQWORLD_CLOUD_STORAGE_URL', plugin_dir_url(__FILE__));

class qqworld_cloud_storage {
	var $text_domain = 'qqworld-cloud-storage';

	public function __construct() {
		$this->settings = get_option($this->text_domain, array());
		$this->url = isset($this->settings['url']) ? $this->settings['url'] : '//';
		$this->enable = isset($this->settings['enable']) ? $this->settings['enable'] : '';

		add_action( 'admin_menu', array($this, 'create_menu') );
		add_action( 'admin_init', array($this, 'register_setting') );
		add_filter( 'plugin_row_meta', array($this, 'plugin_row_meta'),10,2 );
		add_action( 'plugins_loaded', array($this, 'load_language') );
		add_action( 'template_redirect', array($this, 'template_redirect') );
	}

	public function outside_language() {
		__('Michael Wang', $this->text_domain);
	}

	public function create_menu() {
		add_submenu_page('options-general.php', __('QQWorld Cloud Storage', $this->text_domain), __('QQWorld Cloud Storage', $this->text_domain), 'administrator', $this->text_domain, array($this, 'page') );
	}

	public function page() {
		include __DIR__ . DIRECTORY_SEPARATOR . 'settings.php';
	}

	public function load_language() {
		load_plugin_textdomain( $this->text_domain, false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}

	public function plugin_row_meta($links, $file) {
		$base = plugin_basename(__FILE__);
		if ($file == $base) {
			$links[] = '<a href="' . menu_page_url( $this->text_domain, 0 ) . '">' . __('Settings') . '</a>';
		}
		return $links;
	}

	public function register_setting() {
		register_setting($this->text_domain, $this->text_domain, array($this, 'filter'));
	}

	public function filter($values) {
		if (!preg_match('/^(https?:)?\/\//', $values['url'])) $values['url'] = '//' . $values['url'];
		$values['url'] = preg_replace('/\/*$/i', '', $values['url']);
		return $values;
	}

	public function template_redirect() {
		if ( !is_admin() && $this->enable ) ob_start(array($this, 'replace'));
	}

	public function replace($buffer) {
		$url = parse_url(home_url());
		$preg = preg_match_all( '/(https?:)?\/\/'.$url['host'].'[^\'|\"]*?\.(jpg|jpeg|png|gif|webp|bmp)/i', $buffer, $matches );
		$resources = $preg ? $matches[0] : '';
		if (!empty($resources)) $resources = array_flip(array_flip($resources));

		if (!empty($resources)) {
			$patterns = array();
			$replacements = array();

			foreach ($resources as $resource) {
				$patterns[] = $resource;
				$replacements[] = $this->url . str_replace(home_url(), '', $resource);
			}

			$buffer = str_replace($patterns, $replacements, $buffer);
		}
		return $buffer;
	}
}
new qqworld_cloud_storage;
?>