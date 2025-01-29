<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Price;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $prices = Price::where('is_active', true)->orderBy('price', 'asc')->limit(3)->get();
        $articles = Article::where('is_active', true)->orderBy('price', 'asc')->limit(3)->get();
        return view('pages.client.home', [
            'prices' => $prices,
            'articles' => $articles,
        ]);
    }
}
