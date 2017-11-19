<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BillItem;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function popular() {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $weekPopularProduct = BillItem::with('product')
            ->orderBy('quantity', 'desc')
            ->where('created_at', '>=', $startOfWeek)
            ->where('created_at', '<=', $endOfWeek)
            ->groupBy('product_id')
            ->selectRaw('product_id, sum(quantity) as quantity')
            ->get();

        $todayPopularProduct = BillItem::with('product')
            ->orderBy('quantity', 'desc')
            ->whereDate('created_at', '>=', Carbon::now()->toDateString())
            ->groupBy('product_id')
            ->selectRaw('product_id, sum(quantity) as quantity')
            ->get();

        return view('admin.statistic.popular_product', ['weekPopularProduct' => $weekPopularProduct
                                                        , 'todayPopularProduct' => $todayPopularProduct]);
    }
}