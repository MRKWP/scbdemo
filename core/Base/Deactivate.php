<?php
/**
 * Deactivation Class.
 *
 * @package  MRK_Scbdemo
 */

namespace MRK_Scbdemo\Base;

/**
 * Deactivation Class.
 */
class Deactivate {

	/**
	 * Call default activation and rewrite flush.
	 *
	 * @return void
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
