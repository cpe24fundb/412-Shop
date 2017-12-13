<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BillItem;
use App\Models\Bill;
use Carbon\Carbon;

class StatisticBillController extends Controller
{
    public function view() {
        $bills = Bill::all();
        $today = Carbon::now(7);

        return view('admin.statistic.bill.bill_main', ['today' => $today]);
    }

    public function billDate($date) {
        $bills = Bill::all();

        return view('admin.statistic.bill.bill_date', ['date' => $date]);
    }
}