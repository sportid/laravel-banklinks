<?php

namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Danske extends iPizza
{
    protected $configName = 'estonia.danske';

    protected $requestUrl = 'https://www2.danskebank.ee/ibank/pizza/pizza';
}
