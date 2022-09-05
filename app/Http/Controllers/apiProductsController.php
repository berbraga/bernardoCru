<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsProducts;
use Illuminate\Database\Events\ModelsPruned;

class apiProductsController extends Controller
{

    // public function index()
    // {
    //     return ModelsProducts::all();
    // }

    // public function store(Request $request)
    // {
    //     ModelsProducts::create($request->all());
    // }





    // public function show($id)
    // {
    //     return ModelsProducts::findOrFail($id);
    // }

    // public function update(Request $request, $id)
    // {
    //     $product = ModelsProducts::findOrFail($id);
    //     $product->update($request->all());
    // }

    // public function destroy($id)
    // {
    //     $dog = ModelsProducts::findOrFail($id);
    //     $dog->delete();
    // }

    public function index()
    {
        return ModelsProducts::all();
    }

    public function destroy($id)
    {
        $variavel = ModelsProducts::findOrFail($id);
        $variavel->delete();
    }

    public function show($id)
    {
        return ModelsProducts::findOrFail($id);
    }

    public function store(Request $request)
    {
        ModelsProducts::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $variavel = ModelsProducts::findOrFail($id);
        $variavel->update($request->all());
    }
}

































    // public function edit($id)
    // {
    //     //
    // }

    // public function create()
    // {
    //     //
    // }
