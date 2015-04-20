<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Krediidipank extends iPizza
{

	protected $configName = 'estonia.krediidipank';

	protected $requestUrl = 'http://localhost:8080/banklink/krediidipank-common';

}