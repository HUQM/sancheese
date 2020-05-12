<?php

namespace App\Http\Controllers;

use App\Raw_material;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $materialData['rawMaterials'] = Raw_material::paginate(100);

         return view('raw_material.index', $materialData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raw_material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
         $material = new Raw_material;
         $material->name = $request->material_name;
         $material->amount = $request->material_amount;
         $material->price = $request->material_price;
         $material->expiration = $request->material_expiration;
         $material->save();

         return redirect('raw_material')->with('success','ingrediente agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function show(Raw_material $raw_material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rawMaterial = Raw_material::findOrFail($id);
        return view('raw_material.edit', compact('rawMaterial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material = Raw_material::findOrFail($id);
        $material->name = $request->material_name;
        $material->amount = $request->material_amount;
        $material->price = $request->material_price;
        $material->expiration = $request->material_expiration;
        $material->update();

        return redirect('raw_material')->with('success','ingrediente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Raw_material::destroy($id);

            return redirect('raw_material')->with('delete','Ingrediente eliminado');
    }
}
