<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFacturaRequest;
use App\Models\Factura;
use App\Models\User;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = isset($request->per_page) ? intval($request->per_page) : 10;
        $Facturas = Factura::query();
        if(isset($request->start_date)) {
            $Facturas->where('created_at', '>=', $request->start_date);
        }
        if(isset($request->end_date)) {
            $Facturas->where('created_at', '<=', $request->end_date . ' 23:59:59');
        }
        if(isset($request->cliente_id)) {
            $Facturas->where('cliente_id',$request->cliente_id);
        }
        if(isset($request->formasdepago_id)) {
            $Facturas->where('formasdepago_id',$request->formasdepago_id);
        }
        $Facturas = $Facturas->with(['formasdepago', 'cliente', 'productos'])
                            ->latest()
                            ->paginate($perPage);
        return response()->json($Facturas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFacturaRequest $request)
    {
        $Factura = Factura::create($request->validated());
        return response()->json($Factura, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Factura = Factura::find($id)->load(['formasdepago', 'cliente', 'productos']);
        if (!$Factura) {
            return response()->json(['mensaje' => 'Factura no encontrada'], 404);
        }
        return response()->json($Factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFacturaRequest $request,$id)
    {
        $Factura = Factura::find($id);
        if (!$Factura) {
            return response()->json(['mensaje' => 'Factura no encontrada'], 404);
        }
        $Factura->update($request->validated());
        return response()->json($Factura);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Factura = Factura::find($id);
        if (!$Factura) {
            return response()->json(['mensaje' => 'Factura no encontrada'], 404);
        }
        $Factura->delete();
        return response()->json(['message' => 'Factura eliminada']);
    }
}
