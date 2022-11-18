<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllTransaction;
use App\Models\Graph;
use Carbon\Carbon;
use DB;

class PrintController extends Controller
{
    public function index()
      {
            $all_transaction = AllTransaction::all();
            return view('all_transaction')->with('transaction', $transaction);
      }
      public function printpreview()
      {
            $all_transaction = AllTransaction::all();
            return view('transaction')->with('all_transaction', $transaction);
      }

      public function print_monthly()
    {
             $fish =DB::table('all_transaction')
                ->select(DB::raw("DATE_FORMAT(transaction_date, '%Y-%m') as month")
                ,\DB::raw('sum(tilapia) as tilapia')
                ,\DB::raw('sum(ornamental) as ornamental')
                ,\DB::raw('sum(carp) as carp')
                ,\DB::raw('sum(beetle_fish) as beetle_fish')
                ,\DB::raw('sum(cat_fish) as cat_fish'))->groupBy("month")->get();

                $chart_title=[];
                $fishes=[];

                foreach ($fish as $key => $value) {
                    $chart_title[$key]=$value->month;
                    $fishes['tilapia'][$key]=$value->tilapia;
                    $fishes['ornamental'][$key]=$value->ornamental;
                    $fishes['carp'][$key]=$value->carp;
                    $fishes['beetle_fish'][$key]=$value->beetle_fish;
                    $fishes['cat_fish'][$key]=$value->cat_fish;
                }

        return view('print_production', compact('chart_title', 'fishes'))->with('print_production', $fish);  
        
    }
}
