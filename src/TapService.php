<?php

namespace Groupedesign\TapPayment;

use Groupedesign\TapPayment\Services\Charge;

class TapService
{
	/**
	 * @return \Groupedesign\TapPayment\Services\Charge
	 */
	public function createCharge()
	{
		return new Charge();
	}


	/**
	 * @param $id
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function findCharge( $id )
	{
		$charge = new Charge( $id );

		return $charge->find();
	}
}