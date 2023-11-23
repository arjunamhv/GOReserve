<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if(Auth::id()) {
            $is_admin = Auth()->user()->is_admin;

            if($is_admin==0) {
                return view('welcome');
            }
            else if($is_admin==1) {
                return view('admin.dashboard');
            }
            else {
                return redirect()->back();
            }
        }
    }
}
