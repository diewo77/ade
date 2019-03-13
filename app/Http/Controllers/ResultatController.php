<?php

namespace App\Http\Controllers;

use App\Centre;
use App\Resultat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultats = Resultat::all();
        return view('resultats.index', compact('resultats'));
    }

    protected function apiIndex()
    {
        $resultats = Resultat::with('SubResultats', 'Centre')->get();
        return $resultats;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centres = Centre::all();
        return view('resultats.create', compact('centres'));
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
            'centre_id' => 'required',
            'date_document' => 'required|date',
            'date_prelevement' => 'date|nullable',
            'date_passage' => 'date|nullable',
            'date_lecture' => 'date|nullable',
            'nom_preleveur' => 'string|nullable',
            'passage_par' => 'string|nullable',
            'lecture_par' => 'string|nullable',
            'confirme_par' => 'string|nullable'
        ]);

        Resultat::create([
            'centre_id' => $request->get('centre_id'),
            'date_document' => Carbon::parse($request->get('date_document')),
            'date_prelevement' => Carbon::parse($request->get('date_prelevement')),
            'date_passage' => Carbon::parse($request->get('date_passage')),
            'date_lecture' => Carbon::parse($request->get('date_lecture')),
            'nom_preleveur' => $request->get('nom_preleveur'),
            'passage_par' => $request->get('passage_par'),
            'lecture_par' => $request->get('lecture_par'),
            'confirme_par' => $request->get('confirme_par')
        ]);
        return redirect()->route('resultats.index')
            ->with('success', 'Le résultat a était créer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function show(Resultat $resultat)
    {
        $subResultats = $resultat->SubResultats()->get();
        return view('resultats.show', compact('resultat', 'subResultats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultat $resultat)
    {
        $centres = Centre::all();
        return view('resultats.edit', compact('resultat', 'centres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Resultat $resultat)
    {

        $this->validate($request, [
            'centre_id' => 'required',
            'date_document' => 'required|date',
            'date_prelevement' => 'date|nullable',
            'date_passage' => 'date|nullable',
            'date_lecture' => 'date|nullable',
            'nom_preleveur' => 'string|nullable',
            'passage_par' => 'string|nullable',
            'lecture_par' => 'string|nullable',
            'confirme_par' => 'string|nullable'
        ]);

        $resultat->update([
            'centre_id' => $request->get('centre_id'),
            'date_document' => Carbon::parse($request->get('date_document')),
            'date_prelevement' => Carbon::parse($request->get('date_prelevement')),
            'date_passage' => Carbon::parse($request->get('date_passage')),
            'date_lecture' => Carbon::parse($request->get('date_lecture')),
            'nom_preleveur' => $request->get('nom_preleveur'),
            'passage_par' => $request->get('passage_par'),
            'lecture_par' => $request->get('lecture_par'),
            'confirme_par' => $request->get('confirme_par')
        ]);
        return redirect()->route('resultats.index')
            ->with('success', 'Le résultat a était mis a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Resultat $resultat)
    {
        $num = $resultat->SubResultats()->count();
        if ($num === 0) {
            try {
                $resultat->delete();
                return redirect('/resultats');

            } catch (\Illuminate\Database\QueryException $e) {
                return redirect('/resultats')->with('message', 'Il y a eu une erreur');
            }
        } else {
            return back()->with('message', 'Ce résultat contiens des entrées !');
        }

    }
}
