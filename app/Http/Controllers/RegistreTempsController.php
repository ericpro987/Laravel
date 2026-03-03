<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\RegistreTemps;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class RegistreTempsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($ticket)
    {
        return response()->json(RegistreTemps::all()->where("ticket_id","=",$ticket));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $clients = Client::all();
        return view('RegistreTemps.create', compact('id', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $registre = RegistreTemps::create([
            'ticket_id' => $id,
            'user_id' => $request->input("user_id"),
            'data' => $request->input("data"),
            'hores_treballades' => $request->input("hores_treballades"),
            'descripcio_treball' => $request->input("descripcio_treball"),
        ]);
        $registre->save();
        return redirect()->route('RegistreTemps.index', $id)->with('success', 'Ticket agregado correctament');
    }

    /**
     * Display the specified resource.
     */

}
