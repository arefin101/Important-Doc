<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\User;
use App\Exports\UsersExport;
//use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel;

class UsersController extends Controller
{

    private $excel;

    public function __construct(Excel $excel){
        $this->excel = $excel;
    }

    public function export() 
    {
        //return Excel::download(new UsersExport, 'users.xlsx');
        // return (new UsersExport)->download('users.xlsx');
        //return new UsersExport;
         return $this->excel->download(new UsersExport, 'users.xlsx');
        // return $this->excel->download(new UsersExport, 'users.csv', Excel::CSV);
        //return $this->excel->download(new UsersExport, 'users.pdf', Excel::DOMPDF);
    }

    public function show(){
        //return Address::all();
        $phone = User::with('address')->first();
        return $phone;
    }
}
