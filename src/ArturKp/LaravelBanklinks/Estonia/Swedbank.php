<?php

namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Swedbank extends iPizza
{
    protected $configName = 'estonia.swedbank';

    protected $requestUrl = 'https://www.swedbank.ee/banklink';
}
