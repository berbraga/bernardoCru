<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class patientController extends Controller
{
    public function index()
    {
        return patient::all();
    }

    public function store(Request $request)
    {
        patient::create($request->all());
    }


    public function show($id)
    {
        return
            patient::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $variavel = patient::findOrFail($id);
        $variavel->update($request->all());
    }

    public function destroy($id)
    {
        $variavel = patient::findOrFail($id);
        $variavel->delete();
    }
}
