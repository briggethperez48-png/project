<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inicioEvento = \Carbon\Carbon::parse('2026-03-11');
        $diaActual = $inicioEvento->diffInDays(now()) + 1;
        $diasEvento = 3;

        if($diaActual < 1) $diaActual = 1;
        if($diaActual > $diasEvento) $diaActual = $diasEvento;

        return view('formulario.asistencia', [
            'diasEvento' => $diasEvento,
            'diaActual'  => $diaActual
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inicioEvento = Carbon::parse('2026-03-11');

        $diaActual = \Carbon\Carbon::parse($inicioEvento)->diffInDays(now()) + 1;

        if($request->dia != $diaActual){
            return redirect('/content/objetivos')->with('error','No puedes registrar asistencia en este día');
        }

        $yaRegistro = Asistencia::where('user_id', Auth::id())
            ->where('dia', $diaActual)
            ->exists();

        if($yaRegistro){
            return redirect('/content/objetivos')->with('error','Ya registraste asistencia hoy');
        }

        Asistencia::create([
            'user_id' => Auth::id(),
            'dia' => $diaActual,
            'fecha' => now()
        ]);

        return redirect('/content/objetivos')->with('asistencia','Asistencia exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
