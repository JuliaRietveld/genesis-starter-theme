<?php
/**
 * Example of how to create a custom component which accepts a config.
 *
 * @package   SEOThemes\GenesisStarterTheme
 * @link      https://seothemes.com/genesis-starter-theme
 * @author    SEO Themes
 * @copyright Copyright © 2018 SEO Themes
 * @license   GPL-3.0-or-later
 */

namespace SEOThemes\GenesisStarterTheme;

use D2\Core\Core;

/**
 * Example of how to create a custom component.
 *
 * Example config (usually located at config/defaults.php):
 *
 * ```
 * $d2_example = [
 *     Example::SUB_CONFIG => [
 *         Example::KEY => 'value',
 *     ],
 * ];
 *
 * return [
 *     Example::class => $d2_example,
 * ];
 * ```
 */
class Example extends Core {

	const SUB_CONFIG = 'sub-config';
	const KEY = 'key';

	/**
	 * Initialize class.
	 *
	 * @since 3.3.0
	 *
	 * @return void
	 */
	public function init() {
		if ( array_key_exists( self::SUB_CONFIG, $this->config ) ) {
			$this->test( $this->config[ self::SUB_CONFIG ] );
		}
	}

	/**
	 * Example method.
	 *
	 * @since 3.3.0
	 *
	 * @param array $config Components sub config.
	 *
	 * @return void
	 */
	protected function test( $config ) {
		// printf( '%s is the value of %s', $config[ self::KEY ], self::KEY );
	}
}
