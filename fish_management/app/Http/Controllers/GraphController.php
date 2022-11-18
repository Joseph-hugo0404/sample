<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllTransaction;
use App\Models\Graph;
use Carbon\Carbon;
use DB;


class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function monthly()
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

        return view('production', compact('chart_title', 'fishes'));
        
        
    }

    public function yearly()
    {
             $fish =DB::table('all_transaction')
                ->select(DB::raw("DATE_FORMAT(transaction_date, '%Y') as year")
                ,\DB::raw('sum(tilapia) as tilapia')
                ,\DB::raw('sum(ornamental) as ornamental')
                ,\DB::raw('sum(carp) as carp')
                ,\DB::raw('sum(beetle_fish) as beetle_fish')
                ,\DB::raw('sum(cat_fish) as cat_fish'))->groupBy("year")->get();

                $chart_title=[];
                $fishes=[];

                foreach ($fish as $key => $value) {
                    $chart_title[$key]=$value->year;
                    $fishes['tilapia'][$key]=$value->tilapia;
                    $fishes['ornamental'][$key]=$value->ornamental;
                    $fishes['carp'][$key]=$value->carp;
                    $fishes['beetle_fish'][$key]=$value->beetle_fish;
                    $fishes['cat_fish'][$key]=$value->cat_fish;
                }

        return view('production_yearly', compact('chart_title', 'fishes'));
        
        
    }

    public function weekly()
    {
             $fish =DB::table('all_transaction')
                ->select(DB::raw("DATE_FORMAT(transaction_date, '%Y-%m-%w') as week")
                ,\DB::raw('sum(tilapia) as tilapia')
                ,\DB::raw('sum(ornamental) as ornamental')
                ,\DB::raw('sum(carp) as carp')
                ,\DB::raw('sum(beetle_fish) as beetle_fish')
                ,\DB::raw('sum(cat_fish) as cat_fish'))->groupBy("week")->get();

                $chart_title=[];
                $fishes=[];

                foreach ($fish as $key => $value) {
                    $chart_title[$key]=$value->week;
                    $fishes['tilapia'][$key]=$value->tilapia;
                    $fishes['ornamental'][$key]=$value->ornamental;
                    $fishes['carp'][$key]=$value->carp;
                    $fishes['beetle_fish'][$key]=$value->beetle_fish;
                    $fishes['cat_fish'][$key]=$value->cat_fish;
                }

        return view('production_weekly', compact('chart_title', 'fishes'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
