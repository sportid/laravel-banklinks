<?php

namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Nordea extends iPizza
{
    protected $configName = 'estonia.nordea';

    protected $requestUrl = 'https://banklink.luminor.ee';
}
