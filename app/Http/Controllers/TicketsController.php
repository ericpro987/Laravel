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
    public function show($id)
    {
        $ticket = Tickets::all()->where('id', $id)->first();
        return view('tickets.show', compact('ticket'));
    }

    public function edit($id){
        $ticket = Tickets::all()->where('id','=', $id)->first();
        return view('tickets.edit',compact('ticket'));
    }
    public function update(Request $request, $id){
        $ticket = Tickets::all()->where('id','=', $id)->first();
        $ticket->titol = $request->input("titol");
        $ticket->descripcio = $request->input('descripcio');
        $ticket->estat = $request->input('estat');
        $ticket->prioritat = $request->input('prioritat');
        $ticket->hores_estimades = $request->input('hores_estimades');
        $ticket->data_deadline = $request->input('data_deadline');
        $ticket->save();
        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Ticket actualitzat correctament');

    }
    public function canviarEstat(Request $request, $id){
        $ticket = Tickets::all()->where('id','=',$id)->first();
        $estat = $ticket->estat;
        if($estat == 'NOU'){
            $ticket->estat = 'ASSIGNAT';
            $ticket->save();
        }
        else if($estat == 'ASSIGNAT'){
            $ticket->estat = 'EN_PROGRES';
            $ticket->save();
        }else if($estat == 'EN_PROGRES'){
            $ticket->estat = 'EN_REVISIO';
            $ticket->save();
        }else if($estat == 'EN_REVISIO'){
            $ticket->estat = 'TANCAT';
            $ticket->save();
        }else if($estat == 'TANCAT'){
            $ticket->estat = 'EN_REVISIO';
        }
        return redirect()->route('tickets.show', $id)->with('success', 'Estat actualitzat correctament');
    }

    public function destroy($id){
        Tickets::all()->where('id', '=',$id)->first()->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket eliminat correctament');
    }

}
