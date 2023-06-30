<?php
/**
 * Activation Class.
 *
 * @package  MRK_Scbdemo
 */

namespace MRK_Scbdemo\Base;

/**
 * Activation Class.
 */
class Activate {

	/**
	 * Call default activation and rewrite flush.
	 *
	 * @return void
	 */
	public static function activate() {
		flush_rewrite_rules();
	}
}
