<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testeModel;

class testeController extends Controller
{
    public function index()
    {
        return testeModel::all();
    }

    public function show($id)
    {
        return testeModel::findOrFail($id);
    }

    public function store(Request $request)
    {
        testeModel::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $variavel = testeModel::findOrFail($id);
        $variavel->update($request->all());
    }

    public function destroy($id)
    {
        $variavel = testeModel::findOrFail($id);
        $variavel->delete();
    }
}
