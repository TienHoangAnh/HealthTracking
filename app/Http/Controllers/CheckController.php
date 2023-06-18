<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Check;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) { return redirect('/login'); }

        $checks = Check::all();
        return view('check.index',['checks' => $checks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('check.create', ['doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = new Check();

        $check->date = $request->date;
        $check->address = $request->address;
        $check->department = $request->department;
        $check->doctor_id = $request->doctor;

        $check->save();

        return redirect('/checks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $check = Check::find($id);
        return view('check.show', ['check' => $check]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctors = Doctor::All();
        $check = Check::find($id);
        return view('check.edit', [
            'check' => $check, 'doctors' => $doctors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $check = new Check();

        $check->date = $request->date;
        $check->address = $request->address;
        $check->department = $request->department;
        $check->doctor_id = $request->doctor;

        $check->save();

        return redirect('/checks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = Check::find($id);
        $check->delete();

        return redirect('/checks');
    }
}
