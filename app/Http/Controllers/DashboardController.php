<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduct = Product::count();
        $totalCategory = Category::count();
        $totalSupplier = Supplier::count();
        $totalStock = Product::sum('stock');
        $products = Product::latest()
        ->take(5)
        ->get();
        
        return view(
            'dashboard',
            compact(
                'totalProduct',
                'totalCategory',
                'totalSupplier',
                'totalStock',
                'products'
            )
        );
    }
}
