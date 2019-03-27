<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCODECONTROLLER extends Controller
{
    public function showQR()
    {
        return view('displayQR');
        // return back();
    }
}
