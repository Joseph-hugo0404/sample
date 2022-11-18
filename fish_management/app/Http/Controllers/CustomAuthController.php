<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\AllTransaction;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function custom_login(Request $request)
    {
        $request->validate([
            'email'     =>  'required',
            'password'  =>  'required'
        ]);

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential))
        {
            return redirect()->intended('dashboard')->withSuccess('Login');
        }

        return redirect('login')->with('error', 'Login Details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function custom_registration(Request $request)
    {

        $address = $request->address;

        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|email|unique:users',
            'password'  =>  'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'      =>  $data['name'],
            'address'      =>  'None',
            'contact_number'      =>  $data['contact_number'],
            'image'      =>  $data['image'],
            'email'     =>  $data['email'],
            'password'  =>  Hash::make($data['password']),
            'type'      =>  'Admin'
            
        ]);

        return redirect('registration')->with('success', 'Registration Complete');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('main');
        }

        return redirect('login');
    }

    public function transaction()
    {
        if(Auth::check())
        {
            return view('transaction');
        }

        return redirect('login');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function statbox()
    {
       
        $total_transaction = AllTransaction::count();
        $total_admin = User::count();
        $total_tilapia = Price::sum('tilapia_stock');
        $total_ornamental = Price::sum('ornamental_stock');
        $total_carp = Price::sum('carp_stock');
        $total_beetle_fish = Price::sum('beetle_fish_stock');
        $total_cat_fish= Price::sum('cat_fish_stock');

        $total_tilapia_sold = AllTransaction::sum('tilapia');
        $total_ornamental_sold = AllTransaction::sum('ornamental');
        $total_carp_sold = AllTransaction::sum('carp');
        $total_beetle_fish_sold = AllTransaction::sum('beetle_fish');
        $total_cat_fish_sold = AllTransaction::sum('cat_fish');

        
        $total_stocks = $total_tilapia+$total_ornamental+$total_carp+$total_beetle_fish+$total_cat_fish;
        $total_fish_sold = $total_tilapia_sold+$total_ornamental_sold+$total_carp_sold+$total_beetle_fish_sold+$total_cat_fish_sold;

        return view('main', compact('total_transaction','total_admin','total_stocks','total_fish_sold'));

    }
}
