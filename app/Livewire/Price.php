<?php

namespace App\Livewire;

use Livewire\Component;

class Price extends Component
{

    public $prices;

    public function mount($prices)
    {
        $this->prices = $prices;
    }

    public function render()
    {
        return view('livewire.price');
    }
}
