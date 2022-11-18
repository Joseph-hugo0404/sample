<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('profile', compact('data'));
    }

    function edit_validation(Request $request)
    {
        $request->validate([
            'email'     =>  'required|email',
            'name'      =>  'required',
            'address'      =>  'required',
            'contact_number'      =>  'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $data = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';
            $adminImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $adminImage);
            $data['image'] = $adminImage;

        }else{

            unset($data['image']);
        }

        if(!empty($data['password']))
        {
            if(!empty($data['image']))
            {
                $form_data = array(
                    'name'      =>  $data['name'],
                    'email'     =>  $data['email'],
                    'address'     =>  $data['address'],
                    'contact_number'     =>  $data['contact_number'],
                    'password'  =>  Hash::make($data['password']),
                    'image'     =>  $data['image']
                );
            }else{

                $form_data = array(
                    'name'      =>  $data['name'],
                    'email'     =>  $data['email'],
                    'address'     =>  $data['address'],
                    'contact_number'     =>  $data['contact_number'],
                    'password'  =>  Hash::make($data['password'])
                );
            }
            
        }else{

            if(!empty($data['image']))
            {
                $form_data = array(
                    'name'      =>  $data['name'],
                    'email'     =>  $data['email'],
                    'address'     =>  $data['address'],
                    'contact_number'     =>  $data['contact_number'],
                    'image'     =>  $data['image']
                );
            }else{

                $form_data = array(
                    'name'      =>  $data['name'],
                    'email'     =>  $data['email'],
                    'address'     =>  $data['address'],
                    'contact_number'     =>  $data['contact_number'],
                );
            }
           
        }

        User::whereId(Auth::user()->id)->update($form_data);

        return redirect('profile')->with('success', 'Profile Data Updated');
        
    }

}
