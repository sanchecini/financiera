<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $clientes = Cliente::get();
        return view('admin.cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cliente.create');
    }

   
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.index')
        ->with('success', 'Cliente creado correctamente.');

    }

    
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('admin.cliente.show', compact('cliente'));
    }

    
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('admin.cliente.edit', compact('cliente'));
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente');
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index') ->with('success', 'Cliente eliminado correctamente');;
    }
    
}
