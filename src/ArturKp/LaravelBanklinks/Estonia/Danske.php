<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Danske extends iPizza
{

	protected $configName = 'estonia.danske';

	protected $requestUrl = 'http://localhost:8080/banklink/sampo-common';

}