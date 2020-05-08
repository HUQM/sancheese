<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataStore['storeProducts'] = Store::paginate(5);
        return view('store.index', $dataStore);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $storeP = new Store;
        $storeP->product_id = $request->product_store;
        $storeP->amount = $request->store_amount;
        $storeP->elaboration = $request->store_create;
        $storeP->expiration = $request->store_expiration;
        $storeP->save();
        return redirect('store')->with('success','Producto registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view(view: 'store.edit', ['storeProduct' => Store::findOrFail($id)])
        
        $storeProduct=Store::findOrFail($id);
        return view('store.edit', compact('storeProduct'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storeProduct=Store::findOrFail($id);
        $storeProduct->product_id = $request->product_store;
        $storeProduct->amount = $request->store_amount;
        $storeProduct->elaboration = $request->store_create;
        $storeProduct->expiration = $request->store_expiration;
        $storeProduct->save();
        
        // return view('store.index', compact('storeP'))->with('success','Registro editado');
        return redirect()->action('StoreController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Store::destroy($id);
        return redirect('store')->with('delete','Producto eliminado');    
    }
}
