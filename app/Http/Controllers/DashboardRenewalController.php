<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardRenewalController extends Controller
{
    //Tampilan Awal
    public function index(){
        return view('renewal.proses.nik');
    }

    //Tampilan List Peserta
    public function listPeserta(){
        return view('renewal.peserta.list');
    }
}
