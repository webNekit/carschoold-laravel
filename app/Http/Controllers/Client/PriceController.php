<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::where('is_active', true)->orderBy('price', 'asc')->get();
        return view('pages.client.price', [
            'prices' => $prices,
        ]);
    }
}
