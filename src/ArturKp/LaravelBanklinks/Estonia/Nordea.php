<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\Solo;

class Nordea extends Solo
{

	protected $configName = 'estonia.nordea';

	protected $requestUrl = 'http://localhost:8080/banklink/nordea';

}