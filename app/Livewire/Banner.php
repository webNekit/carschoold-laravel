<?php

namespace App\Livewire;

use App\Models\Banner as BannerModel;
use Livewire\Component;

class Banner extends Component
{

    public $banner;

    public function render()
    {
        $this->banner = BannerModel::where('is_active', true)->orderByDesc('created_at')->get();
        return view('livewire.banner');
    }
}
