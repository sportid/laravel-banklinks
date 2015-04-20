<?php namespace ArturKp\LaravelBanklinks\Estonia;

use ArturKp\LaravelBanklinks\Banklink\iPizza;

class Swedbank extends iPizza
{

    protected $configName = 'estonia.swedbank';

    protected $requestUrl = 'http://localhost:8080/banklink/swedbank-common';

    protected function getAdditionalFields()
    {
        return array(
            'VK_ENCODING' => $this->requestEncoding
        );
    }

    public function isReturnResponse( $data )
    {
        return $this->isValidResponse( $data, $this->getPaymentSuccessFields() ) && $data['VK_AUTO'] == 'N';
    }

    public function isPaidResponse( $data )
    {
        return $this->isValidResponse( $data, $this->getPaymentSuccessFields() ) && $data['VK_AUTO'] == 'Y';
    }
}