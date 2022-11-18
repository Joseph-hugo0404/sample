<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Admin;
use Carbon\Carbon;
use DataTables;

use Hash;

use DB;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
/*
    public function index()
    {
        $admin = Admin::latest()->paginate(5);
    
        return view('admin.view_admin',compact('admin'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    
*/
    
    public function construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('view_admin');
    }

    function fetch_all(Request $request)
    {
        if($request->ajax())
        {
            $data = Admin::all();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
    }
}
