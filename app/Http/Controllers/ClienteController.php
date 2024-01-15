<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateUserRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = isset($request->per_page) ? intval($request->per_page) : 10;
        $query = User::query();
        $perPage = $perPage > 0 ? $perPage : $query->count();
        $clientes=$query->paginate($perPage);
        return response()->json($clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'nombre' => 'required',
        ]);
        if ($validador->fails()) {
            $errores = $validador->errors();
            return response()->json(['errores' => $errores], 422);
        }
        $datavalidada = $validador->validated();
        $cliente = User::create($datavalidada);
        return response()->json($cliente, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = User::find($id);
        if (!$cliente) {
            return response()->json(['mensaje' => 'User no encontrada'], 404);
        }
        return response()->json($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = User::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'User no encontrada'], 404);
        }
        $cliente->update($request->validated());
        return response()->json($cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = User::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'User no encontrada'], 404);
        }
        $cliente->delete();
        return response()->json(['message' => 'User eliminada']);
    }
}
