<?php

namespace Groupedesign\TapPayment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class TapPayment
 *
 * @package Groupedesign\TapPayment\Facade
 *
 * @method static \Groupedesign\TapPayment\Services\Charge createCharge()
 * @method static \Groupedesign\TapPayment\Resources\Invoice findCharge()
 */
class TapPayment extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'tap-payment';
	}
}