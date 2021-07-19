<?php

namespace Jhonatan\DigitalCep;

class Search{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipCode(string $zipCode): array{
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode . '/json');

        $get = file_get_contents($this->url . $zipCode . '/json');

        return json_decode($get);
    }
}