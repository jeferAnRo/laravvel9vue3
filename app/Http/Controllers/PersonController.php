<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\City;
use App\Models\Person;
use App\Models\Son;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('people.welcome');
    }
    public function list()
    {
        $people = Person::with('city')->get();
        return response()->json($people);
    }
    public function cities()
    {
        $cities = City::get();
        return response()->json($cities);
    }
    public function store(PersonRequest $request)
    {
        $person = new Person($request->all());
        $person->save();
        return response()->json([
            'saved'=> true,
            'person'=> $person
        ]);
    }
    public function delete(Person $person,Son $son)
    {
        // return $person;
        
        $person->delete();
        return response()->json([
            'deleted'=> true,
            'user'=> $person
        ]);
    }
    public function edit(Person $person)
    {
        $person = Person::with('city')->find($person->id);
        return response()->json($person);
    }
    public function update(PersonRequest $request,Person $person)
    {
        $person->update($request->all());
        return response()->json([
            'updated'=> true,
            'user'=> $person
        ]);
    }
}
