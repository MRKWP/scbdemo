<?php
/**
 * Register Blocks for Scbdemo
 *
 * @package  MRK_Scbdemo
 */

namespace MRK_Scbdemo\Blocks;

use MRK_Scbdemo\Base\BaseController;

/**
 * Scbdemo block.
 */
class Scbdemo extends BaseController {

	/**
	 * Register function is called by default to get the class running
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'init', array( $this, 'create_scbdemo_init' ) );
	}

	/**
	 * Run shortcode.
	 *
	 * @param [type] $attr default attr.
	 * @param [type] $content default content.
	 * @return mixed shortcode render.
	 */
	public function get_scbdemo_shortcode( $attr, $content ) {
		return do_shortcode( '[mrk_scbdemo]' );
	}

	/**
	 * Register block function called by init hook
	 *
	 * @return void
	 */
	public function create_scbdemo_init() {

		register_block_type_from_metadata(
			$this->plugin_path . 'build/scbdemo/',
			array(
				'render_callback' => array( $this, 'get_scbdemo_shortcode' ),
			)
		);
	}
}
