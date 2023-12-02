<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compara;

class ComparaController extends Controller
{
    public function index()
    {
        $compara = Compara::all(); // Todos los registros
        return view('compara.index', compact('compara'));
    }

    public function create()
    {
        return view('compara.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar el nuevo registro en la base de datos
        Compara::create($request->all());

        return redirect('/compara');
    }

    public function show(Compara $compara)
    {
        return view('compara.show', compact('compara'));
    }

    public function edit(Compara $compara)
    {
        return view('compara.edit', compact('compara'));
    }

    public function update(Request $request, Compara $compara)
    {
        $compara->update($request->all());

        return redirect('/compara');
    }

    public function destroy(Compara $compara)
    {
        $compara->delete();

        return redirect('/compara');
    }
}
