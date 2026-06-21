<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $products = Product::with([
            'category',
            'supplier'
        ])
        ->when($request->search, function($query) use ($request){
            $query->where('name','like','%'.$request->search.'%')
            ->orWhere('code','like','%'.$request->search.'%');
        })
        ->paginate(10);
        return view(
            'products.index',
            compact('products')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view(
            'products.create',[
                'categories'=>Category::all(),
                'suppliers'=>Supplier::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'category_id'=>'required',
            'supplier_id'=>'required',
            'code'=>'required|unique:products',
            'name'=>'required',
            'stock'=>'required',
            'price'=>'required'
        ]);

        Product::create(
            $request->all()
        );

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view(
            'products.show',
            compact('product')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.edit',[
            'product'=>$product,
            'categories'=>Category::all(),
            'suppliers'=>Supplier::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update(
            $request->all()
        );

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}
