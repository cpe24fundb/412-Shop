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
        
        $tbills = $this->billCalculate($today, $today);
        $wbills = $this->billCalculate($today->startOfWeek(), $today->endOfWeek());
        $mbills = $this->billCalculate($today->startOfMonth(), $today->endOfMonth());
        $ybills = $this->billCalculate($today->startOfYear(), $today->endOfYear());

        return view('admin.statistic.bill.bill_main', ['today' => $today]);
    }

    private function billCalculate($dateF, $dateT){
        $bills = $bills = Bill::all()->where('created_at', '>=', $dateF->startOfDay())
                                     ->where('created_at', '<=', $dateT->endOfDay());
        return $bills;
    }

    public function billDate($date) {
        $odate = Carbon::createFromFormat('Y-m-d', $date)->addHour(7);
        $bills = $this->billCalculate($odate, $odate);
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $date
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }

    public function billRange($dateF, $dateT) {
        $fdate = Carbon::createFromFormat('Y-m-d', $dateF)->addHour(7);
        $tdate = Carbon::createFromFormat('Y-m-d', $dateT)->addHour(7);
        $bills = $this->billCalculate($fdate, $tdate);
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $dateF . " ~ " . $dateT
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }

    public function billMonth($month) {
        $mdate = Carbon::createFromFormat('Y-m', $month)->addHour(7);
        $bills = $this->billCalculate($mdate->startOfMonth(), $mdate->endOfMonth());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $mdate->format('F')
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }

    public function billYear($year) {
        $ydate = Carbon::createFromFormat('Y', $year)->addHour(7);
        $bills = $this->billCalculate($ydate->startOfYear(), $ydate->endOfYear());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $year
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }
}