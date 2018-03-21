<?php

namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class SEB extends iPizza
{
    protected $configName = 'estonia.seb';

    protected $requestUrl = 'https://www.seb.ee/cgi-bin/unet3.sh/un3min.r';
}
