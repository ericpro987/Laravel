<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Comentari;
use App\Models\Tickets;
use HttpResponse;
use Illuminate\Http\Request;

class ComentariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Comentari::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tickets = Tickets::all();
        $clients = Client::all();
        return view('Comentaris.create', compact('tickets','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comentari = Comentari::create([
                'ticket_id' => $request->input("ticket_id"),
                'user_id' => $request->input("user_id"),
                'contingut' => $request->input("contingut"),
                'data' => $request->input("data")
        ]);
        $comentari->save();
        return redirect()->route('Comentaris.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentari $comentari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentari $comentari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentari $comentari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentari $comentari)
    {
        //
    }
}
