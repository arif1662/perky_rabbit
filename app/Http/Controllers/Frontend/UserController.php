<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class UserController extends Controller
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
        return User::create([
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
        $allRegInfos = User::all();

        return view('frontEnd.home.viewRegInfoContent', ['allRegInfos' => $allRegInfos]);
    }

    // Login===================================================
    public function login()
    {
        return view('frontEnd.login.loginContent');
    }

    public function loginSubmit(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if (Auth::attempt(['phone_no' => $data['phone_no'], 'password' => $data['password']])) {
            Session::put('user', $data['phone_no']);
            request()->session()->flash('message', 'Successfully login');

            return redirect()->route('view.regInfo');
        } else {
            request()->session()->flash('message', 'Invalid "Phone number" or "Password" pleas try again!');

            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('message', 'Logout successfully');

        return redirect('user/login');
    }

    public function createLicnse()
    {
        return view('frontEnd.license.createLicnseContent');
    }
}
