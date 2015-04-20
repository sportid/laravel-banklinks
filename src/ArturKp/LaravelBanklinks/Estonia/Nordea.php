<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\Solo;

class Nordea extends Solo
{

	protected $configName = 'estonia.nordea';

	protected $requestUrl = 'https://netbank.nordea.com/pnbepaytest/epayn.jsp';

}