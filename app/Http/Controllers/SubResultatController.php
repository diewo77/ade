<?php

namespace App\Http\Controllers;

use App\Resultat;
use App\SubResultat;
use Illuminate\Http\Request;

class SubResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function create(Resultat $resultat)
    {
        return view('sub-resultats.create', compact('resultat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Resultat $resultat
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, Resultat $resultat)
    {
        $this->validate($request, [
            'date_reception' => 'date|required',
            'code' => 'string|required',
            'adresse' => 'string|required',
            'result_1' => 'string|nullable',
            'valid_1' => 'accepted',
            'result_2' => 'string|nullable',
            'valid_2' => 'accepted',
            'result_3' => 'string|nullable',
            'valid_3' => 'accepted',
            'result_4' => 'string|nullable',
            'valid_4' => 'accepted',
            'result_5' => 'string|nullable',
            'valid_5' => 'accepted',
            'result_6' => 'string|nullable',
            'valid_6' => 'accepted',
            'result_7' => 'string|nullable',
            'valid_7' => 'accepted',
            'obs' => 'string|nullable',
        ]);

        SubResultat::create([
            'resultat_id' => $resultat->id,
            'date_reception' => $request->get('date_reception'),
            'code' => $request->get('code'),
            'adresse' => $request->get('adresse'),
            'result_1' => $request->get('result_1'),
            'valid_1' => $request->get('valid_1'),
            'result_2' => $request->get('result_2'),
            'valid_2' => $request->get('valid_2'),
            'result_3' => $request->get('result_3'),
            'valid_3' => $request->get('valid_3'),
            'result_4' => $request->get('result_4'),
            'valid_4' => $request->get('valid_4'),
            'result_5' => $request->get('result_5'),
            'valid_5' => $request->get('valid_5'),
            'result_6' => $request->get('result_6'),
            'valid_6' => $request->get('valid_6'),
            'result_7' => $request->get('result_7'),
            'valid_7' => $request->get('valid_7'),
            'obs' => $request->get('obs'),
        ]);
        return redirect()->route('resultats.index')
            ->with('success', 'Le résultat a était créer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubResultat $subResultat
     * @return \Illuminate\Http\Response
     */
    public function show(SubResultat $subResultat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubResultat $subResultat
     * @return \Illuminate\Http\Response
     */
    public function edit(SubResultat $subResultat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\SubResultat $subResultat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubResultat $subResultat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubResultat $subResultat
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubResultat $subResultat)
    {
        //
    }
}
