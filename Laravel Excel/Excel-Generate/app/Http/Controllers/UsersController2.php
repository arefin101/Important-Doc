<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController2 extends Controller
{

    public function show(){
        return view('imports.users');
    }

    public function store(Request $req) 
    {
        $file = $req->file('import')->store('import');

        //(new UsersImport)->import($file);
        
        $import = new UsersImport;

        $import->import($file); 

        //dd($import->errors());
        
        //Excel::import(new UsersImport(), $file);
        
        //dd($import->failures());
        if($import->failures()->isNotEmpty()){
            return back()->withFailures($import->failures());
        }

        return redirect('/users/import')->with('success', 'All good!');

    }
}
