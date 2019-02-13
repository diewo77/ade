<?php

namespace App\Http\Controllers;

use App\Centre;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centres = Centre::all();
        return view('centres.index', compact('centres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'libelle' => 'required',
        ]);

        Centre::create([
            'libelle' => $request->get('libelle'),
            'ville' => $request->get('ville'),
        ]);
        return redirect()->route('centres.index')
            ->with('success', 'Le centre a était créer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function show(Centre $centre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function edit(Centre $centre)
    {
        return view('centres.edit', compact('centre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Centre $centre
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Centre $centre)
    {
        $this->validate($request, [
            'libelle' => 'required',
        ]);

        $centre->update([
            'libelle' => $request->get('libelle'),
            'ville' => $request->get('ville'),
        ]);
        return redirect()->route('centres.index')
            ->with('success', 'mise a jour du centre éffectuer avec succes');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centre $centre)
    {
        //
    }
}
