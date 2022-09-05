<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doceModel;

class doceController extends Controller
{
    public function index()
    {
        return doceModel::all();
    }

    public function show($id)
    {
        return doceModel::findOrFail($id);
    }

    public function store(Request $request)
    {
        doceModel::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $variavel = doceModel::findOrFail($id);
        $variavel->update($request->all());
    }

    public function destroy($id)
    {
        $variavel = doceModel::findOrFail($id);
        $variavel->delete();
    }
}
