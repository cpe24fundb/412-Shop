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

        return view('admin.statistic.bill.bill_view', ['date' => $date
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }

    public function billRange($dateF, $dateT) {
        $fdate = Carbon::createFromFormat('Y-m-d', $dateF)->addHour(7);
        $tdate = Carbon::createFromFormat('Y-m-d', $dateT)->addHour(7);
        $bills = Bill::all()->where('created_at', '>=', $fdate->startOfDay())
                            ->where('created_at', '<=', $tdate->endOfDay());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $dateF . " ~ " . $dateT
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }

    public function billMonth($month) {
        $mdate = Carbon::createFromFormat('Y-m', $month)->addHour(7);
        $bills = Bill::all()->where('created_at', '>=', $mdate->startOfMonth())
                            ->where('created_at', '<=', $mdate->endOfMonth());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $mdate->format('F')
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }
}