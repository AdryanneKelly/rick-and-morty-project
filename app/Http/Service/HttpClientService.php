<?php

namespace App\Http\Service;

use GuzzleHttp\Client;

class HttpClientService
{
    public function getRequest(string $endpoint)
    {
        $client = new Client();

        $response = $client->request('GET', config('app.base_url') . $endpoint);

        return $response->getBody()->getContents();
    }
}
