<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardRenewalController extends Controller
{
    public function index(){
        return view('renewal.proses.nik');
    }
}
