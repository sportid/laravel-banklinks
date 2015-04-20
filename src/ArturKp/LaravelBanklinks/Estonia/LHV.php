<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class LHV extends iPizza
{

	protected $configName = 'estonia.lhv';

	protected $requestUrl = 'http://localhost:8080/banklink/lhv-common';

}