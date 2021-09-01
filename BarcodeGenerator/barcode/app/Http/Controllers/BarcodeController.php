<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function generate(){
        return view('barcode');
    }

    public function generated(Request $request){
        return view('view',['code' => $request->code]);
    }
}
