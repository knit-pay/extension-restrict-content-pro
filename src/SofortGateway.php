<?php
/**
 * Sofort gateway
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2018 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Extensions\RestrictContentPro
 */

namespace Pronamic\WordPress\Pay\Extensions\RestrictContentPro;

use Pronamic\WordPress\Pay\Core\PaymentMethods;

/**
 * Sofort gateway
 *
 * @author  Reüel van der Steege
 * @version 2.0.0
 * @since   1.0.0
 */
class SofortGateway extends Gateway {
	/**
	 * Gateway id.
	 *
	 * @var string
	 */
	protected $id = 'pronamic_pay_sofort';

	/**
	 * Payment method.
	 *
	 * @var string
	 */
	protected $payment_method = PaymentMethods::SOFORT;
}
