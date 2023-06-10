<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Formasdepago;
use Illuminate\Http\Request;

class FormasdePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Formasdepago = Formasdepago::all();
        return response()->json($Formasdepago);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateCategoriaRequest $request)
    {
        $Formasdepago = Formasdepago::create($request->validated());
        return response()->json($Formasdepago, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formasdepago  $formasdepago
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Formasdepago = Formasdepago::find($id);
        if (!$Formasdepago) {
            return response()->json(['mensaje' => 'Forma de pago no encontrada'], 404);
        }
        return response()->json($Formasdepago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formasdepago  $formasdepago
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaRequest $request,$id)
    {
        $Formasdepago = Formasdepago::find($id);
        if (!$Formasdepago) {
            return response()->json(['mensaje' => 'Forma de pago no encontrada'], 404);
        }
        $Formasdepago->update($request->validated());
        return response()->json($Formasdepago);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formasdepago  $formasdepago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Formasdepago = Formasdepago::find($id);
        if (!$Formasdepago) {
            return response()->json(['mensaje' => 'Forma de pago no encontrada'], 404);
        }
        $Formasdepago->delete();
        return response()->json(['message' => 'Forma de pago eliminada']);
    }
}
