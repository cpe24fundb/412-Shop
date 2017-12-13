<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BillItem;
use App\Models\Bill;
use Carbon\Carbon;

class StatisticProductController extends Controller
{
    public function all(){
        $products = Product::all();
        return view('admin.statistic.product_history.product_main', ['products' => $products]);
    }

    public function productRedirect(Request $request){
        $product_id = $request->input('product_id');
        $date_start = $request->input('date_start');
        $date_end = $request->input('date_end');

        return redirect()->route('admin.statistic.product.view', [
            'product_id' => $product_id,
            'date_start' => $date_start,
            'date_end' => $date_end
            ]);
    }

    public function view($product_id,$date_start,$date_end) {
        $products = Product::all();
        $product = Product::findOrFail($product_id);

        $bills = BillItem::with('product')
        ->orderBy('quantity', 'desc')
        ->whereDate('created_at', '>=', $date_start)
        ->whereDate('created_at', '<=', $date_end)
        ->where('product_id', '=' , $product_id)
        ->get(); 
        
        return view('admin.statistic.product_history.product_view',[
        'product' => $product, 
        'products' => $products,
        'bills' => $bills,
        'date' => $product_id . " ~ " . $date_end
        ]) ;

    }

   
}