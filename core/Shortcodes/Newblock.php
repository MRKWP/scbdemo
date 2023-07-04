<?php
/**
 * Register scbdemo shortcode
 *
 * @package  MRK_Scbdemo
 */

namespace MRK_Scbdemo\Shortcodes;

use MRK_Scbdemo\Base\BaseController;

/**
 * Register mrk_newblock shortcode.
 */
class Newblock extends BaseController {

	/**
	 * Register `mrk_scbdemo` shortcode.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( 'mrk_newblock', array( $this, 'mrk_newblock_shortcode' ) );
	}

	/**
	 * Display when called by shortcode.
	 *
	 * @return false|string|void
	 */
	public function mrk_newblock_shortcode() {

		$html = '<h2>New block Shortcode</h2>';

		return $html;
	}
}
