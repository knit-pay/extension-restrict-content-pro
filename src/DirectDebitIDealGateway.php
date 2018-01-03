<?php

/**
 * Title: Restrict Content Pro Direct Debit (mandate via iDEAL) gateway
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Reüel van der Steege
 * @version 1.0.0
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Extensions_RCP_DirectDebitIDealGateway extends Pronamic_WP_Pay_Extensions_RCP_Gateway {
	/**
	 * Initialize Direct Debit (mandate via iDEAL) gateway
	 */
	public function init() {
		$this->id             = 'pronamic_pay_direct_debit_ideal';
		$this->label          = __( 'Direct Debit (mandate via iDEAL)', 'pronamic_ideal' );
		$this->admin_label    = __( 'Direct Debit (mandate via iDEAL)', 'pronamic_ideal' );
		$this->payment_method = Pronamic_WP_Pay_PaymentMethods::DIRECT_DEBIT_IDEAL;
		$this->supports       = array(
			'recurring',
		);
	}
}
