<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marca;

class marcaController extends Controller
{

    public function index()
    {
        return marca::all();
    }

    public function show($id)
    {
        return marca::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $variavel = marca::findOrFail($id);
        $variavel->update($request->all());
    }

    public function store(Request $request)
    {
        marca::create($request->all());
    }


    public function destroy($id)
    {
        $variavel = marca::findOrFail($id);
        $variavel->delete();
    }
}
