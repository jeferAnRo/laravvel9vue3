<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        // return $cities;
        return view('city.city', compact('cities'));
    }
    public function store(CityRequest $request)
    {
        $city = new City($request->all());
        $city->save();
        return back();
    }
    public function delete(City $city)
    {
        $city->delete();
        return back();
    }
    public function edit(City $city)
    {
        return view('city.edit', compact('city'));
    }
    public function update(CityRequest $request, City $city)
    {
        $city->update($request->all());
        return back();
    }
}
