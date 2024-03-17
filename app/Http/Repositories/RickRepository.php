<?php

namespace App\Http\Repositories;

use App\Http\Service\HttpClientService;
use App\Http\Repositories\RickRepositoryInterface;

class RickRepository implements RickRepositoryInterface
{
    public $client;

    public function __construct(HttpClientService $client)
    {
        $this->client = $client;
    }

    public function getCharacters()
    {
        $result = json_decode($this->client->getRequest('/character'));
        return $result;
    }

    public function getCharacterById(int $id)
    {
        $result = json_decode($this->client->getRequest('/character/' . $id));
        return $result;
    }

    public function getEpisodes()
    {
        $result = json_decode($this->client->getRequest('/episode'));
        return $result;
    }

    public function getLocations()
    {
        $result = json_decode($this->client->getRequest('/location'));
        return $result;
    }
}
