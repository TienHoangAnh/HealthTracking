<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Health;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healths = Health::All();
        return view('health.index',[
            'healths' => $healths
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('health.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $health = new Health();

        $health->weight = $request->weight;
        $health->height = $request->height;
        $health->symptom = $request->symptom;

        $health->save();

        return redirect('/healths');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $health = Health::find($id);
        return view('health.show',[
            'health' => $health,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $health = Health::find($id);
        return view('health.edit',[
            'health' => $health,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $health = Health::find($id);

        $health->weight = $request->weight;
        $health->height = $request->height;
        $health->symptom = $request->symptom;

        $health->save();

        return redirect('/healths');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $health = Health::find($id);
        $health->delete();
        return redirect('/healths');
    }
}
