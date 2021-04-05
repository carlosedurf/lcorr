<?php

namespace App\Traits;

trait ViaCep{

    public function getInfoByCEP(string $cep)
    {
        if(empty($cep))
            return false;

        $endpoint = config('viacep.viacep_address');

        $url = "{$endpoint}/{$cep}/json/";

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);


        if($response->getStatusCode() == 200)
            return json_decode($response->getBody());
    }

}
