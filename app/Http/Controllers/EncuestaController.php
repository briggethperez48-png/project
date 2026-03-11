<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class EncuestaController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        $inscripcion = Registro::where('user_id', Auth::id())->first();

        if (!$inscripcion) {
            return redirect('/formulario/create')
                ->with('error', 'Primero debes inscribirte al curso.');
        }

        $yaTerminado = Encuesta::where('user_id', Auth::id())->exists();

        if ($yaTerminado) {
            return redirect('content/objetivos')
                ->with('error','Ya respondiste la encuesta.');
        }

        $folio = 'MX-2026-' . strtoupper(Str::random(8));

        Encuesta::create([
            'user_id' => Auth::id(),
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'sugerencias' => $request->sugerencias,
            'folio' => $folio
        ]);

        return redirect('content/objetivos')->with('folio', $folio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Encuesta $encuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuesta $encuesta)
    {
        //
    }
}
