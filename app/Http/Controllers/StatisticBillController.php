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
        $odate = Carbon::createFromFormat('Y-m-d', $date)->addHour(7);
        $bills = Bill::all()->where('created_at', '>=', $odate->startOfDay())
                            ->where('created_at', '<=', $odate->endOfDay());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_date', ['date' => $date
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }
}