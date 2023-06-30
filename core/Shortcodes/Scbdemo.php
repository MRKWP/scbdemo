<?php
/**
 * Register scbdemo shortcode
 *
 * @package  MRK_Scbdemo
 */

namespace MRK_Scbdemo\Shortcodes;

use MRK_Scbdemo\Base\BaseController;

/**
 * Register mrk_scbdemo shortcode.
 */
class Scbdemo extends BaseController {

	/**
	 * Register `mrk_scbdemo` shortcode.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( 'mrk_scbdemo', array( $this, 'mrk_scbdemo_shortcode' ) );
	}

	/**
	 * Display when called by shortcode.
	 *
	 * @return false|string|void
	 */
	public function mrk_scbdemo_shortcode() {

		$html = '<h2>Super Shortcode</h2>';

		return $html;
	}
}
