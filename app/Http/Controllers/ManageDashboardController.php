<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\BillItem;
use App\Models\Product;
use App\Models\Stock;
use App\Models\StockItem;

class ManageDashboardController extends Controller
{
    public function view()
    {
        $balance = Bill::sum('line_total') - Stock::sum('line_total');
        $sellCount = BillItem::sum('quantity');
        $inStock = StockItem::sum('quantity') - $sellCount;
        return view('admin.manager.dashboard', [
            'balance' => $balance,
            'sellCount' => $sellCount,
            'inStock' => $inStock
        ]);
    }

    
}