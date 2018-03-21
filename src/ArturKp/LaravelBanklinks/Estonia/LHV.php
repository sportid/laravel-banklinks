<?php

namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class LHV extends iPizza
{
    protected $configName = 'estonia.lhv';

    protected $requestUrl = 'https://www.lhv.ee/banklink';
}
