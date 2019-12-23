<?php

namespace App\Http\Controllers;

use App\Producte;
use Illuminate\Http\Request;

class ProducteController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productes = Producte::orderby('nom')->paginate(10);

        return view('productes.index', compact('productes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        $requestData['actiu'] = isset($requestData['actiu']) ? 1 : 0;

        Producte::create($requestData);

        return redirect()->route('productes.index')->with(['producte' => "S'ha creat el producte correctament!"]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producte = Producte::findorfail($id);        

        return view('productes.edit', compact('producte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producte = Producte::findorfail($id);  

        $requestData = $request->all();

        $requestData['actiu'] = isset($requestData['actiu']) ? 1 : 0;

        $producte->update($requestData);

        return redirect()->route('productes.index')->with(['producte' => "S'ha actualitzat el producte correctament!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producte = Producte::findorfail($id);  

        $producte->delete();

        return redirect()->route('productes.index')->with(['producte' => "S'ha eliminat el producte correctament!"]);
    }
}
