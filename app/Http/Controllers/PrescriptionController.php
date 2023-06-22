<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use \App\Models\Person;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) { return redirect('/login'); }

        $prescriptions = Prescription::All();
        return view('prescription.index', ['prescriptions' => $prescriptions,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $people = Person::all(); 
        return view('prescription.create', ['people' => $people]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prescription = new Prescription();

        $prescription->name = $request->name;
        $prescription->amount = $request->amount;
        $prescription->using = $request->using;

        $prescription->save();
        $prescription->people()->attach($request->people);

        return redirect('/prescriptions');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prescription = Prescription::find($id);
        return view('prescription.show', ['prescription' => $prescription]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prescription = Prescription::find($id);
        $people = Person::All();
        return view('prescription.edit', ['prescription' => $prescription, 'people' => $people]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prescription = Prescription::find($id);

        $prescription->people()->sync($request->people);
        $prescription->name = $request->name;
        $prescription->amount = $request->amount;
        $prescription->using = $request->using;

        $prescription->save();

        return redirect('/prescriptions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prescription = Prescription::find($id);
        $prescription->delete();

        return redirect('/prescriptions');
    }
}
