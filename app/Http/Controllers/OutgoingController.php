<?php

namespace App\Http\Controllers;

use App\Models\Outgoing;
use App\Models\Product;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Outgoing::with('product')->get();
        return view(
            'outgoing.index',
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
            'outgoing.create',
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
        
        $product = Product::find(
            $request->product_id
        );
        
        if($product->stock < $request->qty){
            return back()
            ->with('error',
            'Stok tidak cukup');
        }
        
        Outgoing::create(
            $request->all()
        );
        
        $product->decrement(
            'stock',
            $request->qty
        );
        
        return redirect('/outgoing');

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
