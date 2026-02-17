<?php

namespace App\Http\Controllers;

use App\Models\Projecte;
use App\Models\Tickets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class TicketsController extends Controller
{
    public function index(){
        return response()->json(Tickets::all());

    }
    public function create(){
        $tickets = Tickets::all();
        $projects = Projecte::all();
        $users = User::all();
        return view('tickets.create',compact('tickets', 'projects', 'users'));
    }
    public function store(Request $request){
        $ticket = Tickets::create([
            'titol' => $request->input('titol'),
            'descripcio' => $request->input('descripcio'),
            'codi_ticket' => $request->input('codi_ticket'),
            'projecte_id' => $request->input('projecte_id'),
            'ticket_pare_id' => $request->input('ticket_pare_id'),
            'tipus' => $request->input('tipus'),
            'estat' => $request->input('estat'),
            'prioritat' => $request->input('prioritat'),
            'hores_estimades' => $request->input('hores_estimades'),
            'assignat_a' => $request->input('assignat_a'),
            'data_creacio' => Date::now(),
            'creat_per' => Auth::id(),

        ]);
        $ticket->save();
        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Ticket agregado correctament');
    }
    public function show($id){
        return view('tickets.show');
    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }

}
