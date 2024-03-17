<?php

namespace App\Http\Repositories;

interface RickRepositoryInterface
{
    public function getCharacters();
    public function getCharacterById(int $id);
    public function getEpisodes();
    public function getLocations();
}
