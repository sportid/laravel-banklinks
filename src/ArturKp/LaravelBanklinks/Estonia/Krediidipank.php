<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Krediidipank extends iPizza
{

	protected $configName = 'estonia.krediidipank';

	protected $requestUrl = 'https://i-pank.krediidipank.ee/pay';

}