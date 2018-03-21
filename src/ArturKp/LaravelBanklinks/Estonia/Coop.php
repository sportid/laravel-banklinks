<?php

namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Coop extends iPizza
{
    protected $configName = 'estonia.coop';

    protected $requestUrl = 'https://i.cooppank.ee/pay';
}
