<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Courier;
use App\Models\Province;
use Illuminate\Http\Request;
use Kodepandai\LaravelRajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    public function index()
    {
        $courier = Courier::pluck('title', 'code');
        $province = Province::pluck('title', 'province_id');
        return view('welcome', compact('couriers', 'province'));

    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function submit(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin,
            'destination'   => $request->city_destination,
            'weight'        => $request->weight,
            'courier'       => $request->courier,
        ])->get();

        dd($cost);
    }
}
