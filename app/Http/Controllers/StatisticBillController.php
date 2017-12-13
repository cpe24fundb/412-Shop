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
        
        $tbills = $this->billCalculate(Carbon::now(7), Carbon::now(7));
        $wbills = $this->billCalculate(Carbon::now(7)->startOfWeek(), Carbon::now(7)->endOfWeek());
        $mbills = $this->billCalculate(Carbon::now(7)->startOfMonth(), Carbon::now(7)->endOfMonth());
        $ybills = $this->billCalculate(Carbon::now(7)->startOfYear(), Carbon::now(7)->endOfYear());

        $tcount = $tbills->count();
        $wcount = $wbills->count();
        $mcount = $mbills->count();
        $ycount = $ybills->count();

        $tsold = $tbills->sum('quantity');
        $wsold = $wbills->sum('quantity');
        $msold = $mbills->sum('quantity');
        $ysold = $ybills->sum('quantity');

        $ttotal = $tbills->sum('line_total');
        $wtotal = $wbills->sum('line_total');
        $mtotal = $mbills->sum('line_total');
        $ytotal = $ybills->sum('line_total');

        return view('admin.statistic.bill.bill_main', ['today' => $today
                                                ,'tcount' => $tcount, 'tsold' => $tsold, 'ttotal' => $ttotal
                                                ,'wcount' => $wcount, 'wsold' => $wsold, 'wtotal' => $wtotal
                                                ,'mcount' => $mcount, 'msold' => $msold, 'mtotal' => $mtotal
                                                ,'ycount' => $ycount, 'ysold' => $ysold, 'ytotal' => $ytotal]);
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
        $ndate = Carbon::createFromFormat('Y-m', $month)->addHour(7);
        $bills = $this->billCalculate($mdate->startOfMonth(), $ndate->endOfMonth());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $mdate->format('F')
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);

    }

    public function billYear($year) {
        $xdate = Carbon::create($year,1,1,0)->addHour(7);
        $ydate = Carbon::create($year,1,1,0)->addHour(7);
        $bills = $this->billCalculate($xdate->startOfYear(), $ydate->endOfYear());
        $sum = $bills->sum('line_total');

        return view('admin.statistic.bill.bill_view', ['date' => $year
                                                        ,'bills' => $bills
                                                        ,'sum' => $sum]);
        // return [$ydate, $ydate->startOfYear(), $ydate->endOfYear()];
    }
}