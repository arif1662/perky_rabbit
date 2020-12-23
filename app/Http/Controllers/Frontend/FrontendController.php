<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Registration;
use Hash;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.homeContent');
    }

    public function saveRegistrationInfo(Request $request)
    {
        $data = $request->all();
        // $data->reg_number = 'REG-'.strtoupper(Str::random(5));
        $check = $this->create($data);
        Session::put('user', $data['phone_no']);
        if ($check) {
            request()->session()->flash('message', 'Registration Info Save Successfully');
        } else {
            request()->session()->flash('message', 'Please try again!!');
        }

        return redirect()->back();
    }

    public function create(array $data)
    {
        return Registration::create([
            // 'reg_number' => 'REG-'.strtoupper(Str::random(5)),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'org_name' => $data['org_name'],
            'street' => $data['street'],
            'city' => $data['city'],
            'email' => $data['email'],
            'phone_no' => $data['phone_no'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function viewRegistrationInfo()
    {
        $allRegInfos = Registration::all();
        return view('frontEnd.home.viewRegInfoContent', ['allRegInfos' => $allRegInfos]);
    }
    
    
    // Login===================================================
    public function login()
    {
        return view('frontEnd.login.loginContent');
    }

    public function loginSubmit( Request $request)
    {
        $data = $request->all();
    	// dd($data);
        // if (Auth::attempt(['phone_no' => $data['phone_no'], 'password' => $data['password']])) {
        if (['phone_no' => $data['phone_no'], 'password' => $data['password']]) {
            // Session::put('user', $data['phone_no']);
            request()->session()->flash('message', 'Successfully login');

            return redirect()->route('create.license');
        } else {
            request()->session()->flash('message', 'Invalid Phone number and password pleas try again!');

            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success', 'Logout successfully');

        return redirect('login');
    }
    
    public function createLicnse()
    {
        return view('frontEnd.license.createLicnseContent');
    }
}
