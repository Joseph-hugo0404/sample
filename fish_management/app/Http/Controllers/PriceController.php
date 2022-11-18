<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use Carbon\Carbon;
use DataTables;

use Hash;

use DB;

use Illuminate\Support\Facades\Auth;

class PriceController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('price');
    }

    function fetch_all(Request $request)
    {
        if($request->ajax())
        {
            $data = Price::all();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="/price/edit/'.$row->id.'" class="btn btn-primary btn-sm">Edit</a>&nbsp;';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    public function edit($id)
    {
        $data = Price::findOrFail($id);

        return view('edit_price', compact('data'));
    }

    function edit_validation(Request $request)
    {
        $request->validate([
            'tilapia'      =>  'required',
            'tilapia_stock'      =>  'required',
            'ornamental'      =>  'required',
            'ornamental_stock'      =>  'required',
            'carp'      =>  'required',
            'carp_stock'      =>  'required',
            'beetle_fish'     =>  'required',
            'beetle_fish_stock'     =>  'required',
            'cat_fish'     =>  'required',
            'cat_fish_stock'     =>  'required'
 
        ]);

        $data = $request->all();

        if(!empty($data['tilapia']))
        {
            $form_data = array(
                'tilapia'     =>  $data['tilapia'],
                'tilapia_stock'     =>  $data['tilapia_stock'],
                'ornamental'     =>  $data['ornamental'],
                'ornamental_stock'     =>  $data['ornamental_stock'],
                'carp'     =>  $data['carp'],
                'carp_stock'     =>  $data['carp_stock'],
                'beetle_fish'     =>  $data['beetle_fish'],
                'beetle_fish_stock'     =>  $data['beetle_fish_stock'],
                'cat_fish'     =>  $data['cat_fish'],
                'cat_fish_stock'     =>  $data['cat_fish_stock']
            );
        }
        else
        {
            $form_data = array(
                'tilapia'     =>  $data['tilapia'],
                'tilapia_stock'     =>  $data['tilapia_stock'],
                'ornamental'     =>  $data['ornamental'],
                'ornamental_stock'     =>  $data['ornamental_stock'],
                'carp'     =>  $data['carp'],
                'carp_stock'     =>  $data['carp_stock'],
                'beetle_fish'     =>  $data['beetle_fish'],
                'beetle_fish_stock'     =>  $data['beetle_fish_stock'],
                'cat_fish'     =>  $data['cat_fish'],
                'cat_fish_stock'     =>  $data['cat_fish_stock']
            );
        }

        Price::whereId($data['hidden_id'])->update($form_data);

        return redirect('price')->with('success', 'Price Updated');

    }

    /*
    function delete($id)
    {
        $data = AllTransaction::findOrFail($id);

        $data->delete();

        return redirect('all_transaction')->with('success', 'Transaction Data Removed');
    }
    
    function printpreview()
    {
        $all_transaction = AllTransaction::all();
        return view('transaction')->with('transaction', $all_transaction);
    }
    */
}
