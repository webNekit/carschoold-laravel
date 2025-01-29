<?php

namespace App\Livewire;

use App\Models\Review as ModelsReview;
use Livewire\Component;

class Review extends Component
{
    public $reviews;

    public function render()
    {
        $this->reviews = ModelsReview::orderByDesc('created_at')->get();
        return view('livewire.review');
    }
}
