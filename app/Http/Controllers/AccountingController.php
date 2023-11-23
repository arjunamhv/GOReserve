<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index()
    {
        $payments = [
            'nama' => 'nilai nama',
            'harga' => 'nilai harga'
        ];
        return view('admin.accounting', compact('payments'));
    }
}
