<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;

class EventoController extends Controller
{
    public function store(Request $request){

        request()->validate(Evento::$rules);

        $novo_evento = new Evento();
        $novo_evento->title = $request->title;
        $novo_evento->descricao = $request->descricao;
        $novo_evento->color = '5f91a8';
        $novo_evento->organizadores = $request->organizadores;
        $novo_evento->localevento = $request->localevento;
        $novo_evento->linkdivulgacao = $request->linkdivulgacao;
        $novo_evento->start = new DateTime( $request->start. ' '.  $request->horariostart);;
        $novo_evento->end = new DateTime( $request->end. ' '.  $request->horarioend);


        $novo_evento->save();

        // $evento = Evento::create($request->all());

    }

    public function show(Evento $evento){

        $evento  = Evento::all();
        return response()->json($evento);

    }

    public function edit($id){

        $evento  = Evento::find($id);

        $horariostart = date("H:i", strtotime($evento->start));
        $horarioend = date("H:i", strtotime($evento->end));

        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');

        $todoEvento = array (
            'evento'  =>  $evento,
            'horariostart' => $horariostart,
            'horarioend' => $horarioend,
        );

        return response()->json($todoEvento);

    }

    public function update(Request $request, Evento $evento){

        request()->validate(Evento::$rules);




        // $evento->update($request->all());


        $evento->title = $request->title;
        $evento->descricao = $request->descricao;
        $evento->organizadores = $request->organizadores;
        $evento->localevento = $request->localevento;
        $evento->linkdivulgacao = $request->linkdivulgacao;
        $evento->start = new DateTime( $request->start. ' '.  $request->horariostart);;
        $evento->end = new DateTime( $request->end. ' '.  $request->horarioend);


        $evento->save();




        return response()->json($evento);
    }

    public function destroy($id){

        $evento  = Evento::find($id)->delete();


        return response()->json($evento);

    }
}
