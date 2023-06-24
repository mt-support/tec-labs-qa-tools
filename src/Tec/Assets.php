<?php
/**
 * Handles registering all Assets for the Plugin.
 *
 * To remove a Asset you can use the global assets handler:
 *
 * ```php
 *  tribe( 'assets' )->remove( 'asset-name' );
 * ```
 *
 * @since 1.0.0
 *
 * @package Tribe\Extensions\Qatools
 */

namespace Tribe\Extensions\Qatools;

use TEC\Common\Contracts\Service_Provider;

/**
 * Register Assets.
 *
 * @since 1.0.0
 *
 * @package Tribe\Extensions\Qatools
 */
class Assets extends Service_Provider {
	/**
	 * Binds and sets up implementations.
	 *
	 * @since 1.0.0
	 */
	public function register() {
		$this->container->singleton( static::class, $this );
		$this->container->singleton( 'extension.qa_tools.assets', $this );

		$plugin = tribe( Plugin::class );

	}
}
