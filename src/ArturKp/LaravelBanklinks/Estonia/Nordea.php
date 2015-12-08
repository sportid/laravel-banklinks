<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\Solo;

class Nordea extends iPizza
{

	protected $configName = 'estonia.nordea';

	protected $requestUrl = 'https://netbank.nordea.com/pnbepay/epayn.jsp';

}