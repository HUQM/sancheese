<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProdcuct['products'] = Product::paginate(1);

        return view('product.index', $dataProdcuct);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $producto = new Product;
        $producto->name = $request->product_name;
        $producto->weight = $request->product_weight;
        $producto->price = $request->product_price;
        $producto->save();

        // $msg = [
        //     'title' => 'Creado!',
        //     'text' => 'Producto creado exitosamente.',
        //     'icon' => 'success'
        // ];

        return redirect('product')->with('success','Producto agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Product::findOrFail($id);

        return  view('product.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Product::findOrFail($id);
        $producto->name = $request->product_name;
        $producto->weight = $request->product_weight;
        $producto->price = $request->product_price;
        $producto->update();

        return redirect('product')->with('success','Producto editado');
        // return  view('product.index', compact('producto'));
        //Listo Mademoiselle
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('products');
    }
}
