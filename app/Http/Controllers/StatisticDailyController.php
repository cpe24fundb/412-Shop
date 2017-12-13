<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BillItem;
use Carbon\Carbon;

class StatisticDailyController extends Controller
{

public function daily(){
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $time = Carbon::today()->toDateString();

        $todayDaily = BillItem::with('product')
        ->orderBy('quantity', 'desc')
        ->whereDate('created_at', '=', Carbon::now()->toDateString())
        ->groupBy('product_id')
        ->selectRaw('product_id, sum(quantity) as quantity')
        ->get();

        return view('admin.statistic.daily_sale_summary', ['daily' => $todayDaily, 'time' => $time]);
    }

    public function dailyRedirect(Request $request){
        $date = $request->input('time');

        return redirect()->route('admin.statistic.daily.view', ['created_at' => $date]);
    }

    public function view($time){
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $today = Carbon::today()->toDateString();

        $todayDaily = BillItem::with('product')
        ->orderBy('quantity', 'desc')
        ->whereDate('created_at', '=', $time)
        ->groupBy('product_id')
        ->selectRaw('product_id, sum(quantity) as quantity')
        ->get();

        return view('admin.statistic.daily_sale_summary', ['daily' => $todayDaily, 'time' => $time]);
    }
}