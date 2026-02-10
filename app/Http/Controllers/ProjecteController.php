<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Projecte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class ProjecteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Projecte::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view("projectes.create",compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Projecte::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "project_code" => $request->input('project_code'),
            "state" => $request->input('state'),
            "begin_date" => Date::now(),
            "previst_end_date" => $request->input('previst_end_date'),
            "estimate_budget_hours" => $request->input('estimate_budget_hours'),
            "client_id" => $request->input('client_id'),
            "gestor_id" => Auth::id(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projecte = Projecte::find($id);
        $idClient = $projecte->client_id;
        $client = Client::all()->where('id','=', $idClient)->first();
        $idGestor = $projecte->gestor_id;
        $gestor = User::all()->where('id', '=', $idGestor)->first();
        return view('projectes.show',compact('projecte', 'client', 'gestor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projecte = Projecte::all()->where('id','=', $id)->first();
        return view('projectes.edit',compact('projecte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projecte = Projecte::all()->where('id','=', $id)->first();
        $projecte->begin_date = Date::now();
        $projecte->name = $request->input('name');
        $projecte->description = $request->input('description');
        $projecte->state = $request->input('state');
        $projecte->estimate_budget_hours = $request->input('estimate_budget_hours');
        $projecte->save();
        return redirect()->route('projectes.index')->with('success', 'Projecte actualitzat correctament');
    }
    public function canviarEstat(string $id){
        $projecte = Projecte::all()->where('id','=', $id)->first();
        return view('projectes.editEstat',compact('projecte'));
    }
public function updateEstat(Request $request, string $id)
{
    $Projecte = Projecte::all()->where('id','=', $id)->first();
    $Projecte->estat = $request->input('estat');
    $Projecte->save();
    return redirect()->route('projectes.index')->with('success', 'Estat actualitzat correctament');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projecte $projecte)
    {
        //
    }
}
