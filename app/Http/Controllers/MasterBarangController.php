<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    //
    public function View()
    {
        return view('master.barang.view');
    }
    public function Add()
    {
        return view('master.barang.add');
    }
}
