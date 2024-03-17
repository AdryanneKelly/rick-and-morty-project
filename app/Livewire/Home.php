<?php

namespace App\Livewire;

use App\Http\Repositories\RickRepositoryInterface;
use Livewire\Component;

class Home extends Component
{
    public $characters;
    public $locations;
    public $episodes;
    public $active = 'personagens';

    public function setActive($value)
    {
        $this->active = $value;
    }

    public function render()
    {
        return view('livewire.home');
    }

    public function mount(RickRepositoryInterface $rickRepository)
    {
        $this->characters = $rickRepository->getCharacters();
        $this->locations = $rickRepository->getLocations();
        $this->episodes = $rickRepository->getEpisodes();
    }
}
