<?php

namespace App\Http\Controllers;

use App\Http\Requests\SonRequest;
use App\Models\City;
use App\Models\Son;
use App\Models\Person;

use Illuminate\Http\Request;

class SonController extends Controller
{
    public function index()
    {
        $sons = Son::with('person')->get();
        $parents = Person::all();

        // $sons = Son::all();
        return view('son.son',compact('sons','parents'));
    }
    public function sons()
    {
        $sons = Son::with('person')->get();
        return $sons;
    }
    public function store(SonRequest $request)
    {
        $person = new Son($request->all());
        $person->save();
        return back();
    }
    public function delete(Son $son)
    {
        $son->delete();
        return back();
    }
    public function edit(Son $son)
    {
        $parents = Person::all();
        return view('son.edit', compact('son','parents'));
    }
    public function update(SonRequest $request,Son $son)
    {
        $son->update($request->all());
        return back();
    }
}
