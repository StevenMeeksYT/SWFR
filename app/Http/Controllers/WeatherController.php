<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

public function index()
{
    $response = Http::get('https://api.open-meteo.com/v1/forecast', [
        'latitude' => 4.2,
        'longitude' => 100.7,
        'current_weather' => true
    ]);

    return view('weather', [
        'data' => $response->json()
    ]);
}