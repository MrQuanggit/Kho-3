<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function index() {
        $reponsive = Http::get('api.openweathermap.org/data/2.5/weather', [
            'q'     => 'Hue',
            'appid' => 'e4d144787dcc48222b0ab1d539d271e6',
        ]);
        $dataJson   = $reponsive->body();
        $result     = json_decode($dataJson);

        $celcius        = $result->main->temp -273;
        $celcius        = number_format($celcius);
        $nameCity       = $result->name;
        $nameCountry    = $result->sys->country;
        $wind           = $result->wind->speed." m/s";
        $humidity       = $result->main->humidity." %";
        $cloud          = $result->clouds->all." %";
        $rain           = $result->weather[0]->description;
        return view('weather', compact('celcius', 'rain', 'cloud', 'humidity', 'nameCity', 'nameCountry', 'wind'));
    }

    function change($city) {
        $reponsive = Http::get('api.openweathermap.org/data/2.5/weather', [
            'q'     => $city,
            'appid' => 'e4d144787dcc48222b0ab1d539d271e6',
        ]);
        $dataJson   = $reponsive->body();
        $result     = json_decode($dataJson);

        $celcius        = $result->main->temp -273;
        $celcius        = number_format($celcius);
        $nameCity       = $result->name;
        $nameCountry    = $result->sys->country;
        $wind           = $result->wind->speed." m/s";
        $humidity       = $result->main->humidity." %";
        $cloud          = $result->clouds->all." %";
        $rain           = $result->weather[0]->description;

        return response()->json([
            'celcius'       => $celcius,
            'rain'          => $rain,
            'cloud'         => $cloud,
           'humidity'       => $humidity,
            'wind'          => $wind,
            'nameCountry'   => $nameCountry,
            'nameCity'      => $nameCity
        ]);
    }
}
