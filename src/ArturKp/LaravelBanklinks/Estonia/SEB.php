<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class SEB extends iPizza
{

	protected $configName = 'estonia.seb';

	protected $requestUrl = 'http://localhost:8080/banklink/seb-common';

}