<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = Person::all();

        return view('person.index', [
            'people' => $person,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = new Person();

        $person->name = $request->name;
        $person->birth = $request->birth;
        $person->address = $request->address;
        $person->idcard = $request->idcard;
        $person->phone = $request->phone;
        $person->email = $request->email;

        $person->save();

        return redirect('/person');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person = Person::find($id);

        return view('person.show', [
            'person' => $person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person = Person::find($id);

        return view('person.edit', [
            'person' => $person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $person = Person::find($id);

        $person->name = $request->name;
        $person->birth = $request->birth;
        $person->address = $request->address;
        $person->idcard = $request->idcard;
        $person->phone = $request->phone;
        $person->email = $request->email;

        $person->save();

        return redirect('/person');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::find($id);

        $person->delete();

        return redirect('/person');
    }
}
