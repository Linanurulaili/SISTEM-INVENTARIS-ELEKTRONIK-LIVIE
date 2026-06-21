<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use App\Models\Product;
use Illuminate\Http\Request;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Incoming::with('product')->get();
        return view(
            'incoming.index',
            compact('data')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view(
            'incoming.create',
            compact('products')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
            'qty'=>'required'
        ]);
        
        Incoming::create(
            $request->all()
        );
        
        $product = Product::find(
            $request->product_id
        );
        
        $product->increment(
            'stock',
            $request->qty
        );
        
        return redirect('/incoming');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
