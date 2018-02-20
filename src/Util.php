<?php

namespace Pronamic\WordPress\Pay\Extensions\RestrictContentPro;

use Pronamic\WordPress\Pay\Subscriptions\Subscription;
use WP_Query;

/**
 * Title: Restrict Content Pro Util
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 1.0.0
 * @since   1.0.0
 */
class Util {
	/**
	 * Get Pronamic RCP subscription for user.
	 *
	 * @param $user_id
	 *
	 * @return Subscription
	 */
	public static function get_subscription_by_user( $user_id = null ) {
		if ( empty( $user_id ) ) {
			return;
		}

		$query = new WP_Query( array(
			'fields'         => 'ids',
			'post_type'      => 'pronamic_pay_subscr',
			'post_status'    => 'any',
			'author'         => $user_id,
			'meta_query'     => array(
				array(
					'key'   => '_pronamic_subscription_source',
					'value' => 'restrictcontentpro',
				),
			),
			'no_found_rows'  => true,
			'order'          => 'DESC',
			'orderby'        => 'ID',
			'posts_per_page' => 1,
		) );

		$post_id = reset( $query->posts );

		if ( false === $post_id ) {
			return;
		}

		return new Subscription( $post_id );
	}
}
