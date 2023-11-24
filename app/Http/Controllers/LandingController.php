<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $gorData = Gor::get(['gor_banner', 'slug']);
        return view('welcome', compact('gorData'));
    }
}
