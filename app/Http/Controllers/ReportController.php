<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with([
            'category',
            'supplier'
        ])
        ->when($request->search, function($query) use ($request){
            $query->where('name','like','%'.$request->search.'%')
            ->orWhere('code','like','%'.$request->search.'%');
        })
        ->get();
        return view(
            'reports.index',
            compact('products')
        );
    }

}
