<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }


    public function index(){
        return view('admin.home');
    }

    public function LogOut(){
        Auth::logout();
        $notification = array(
            'message' => 'Successfully logout',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.login')->with($notification);
    }
}
