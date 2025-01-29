<?php

namespace App\Livewire;

use Livewire\Component;

class Article extends Component
{
    public $articles;

    public function mount($articles)
    {
        $this->articles = $articles;
    }

    public function render()
    {
        return view('livewire.article');
    }
}
