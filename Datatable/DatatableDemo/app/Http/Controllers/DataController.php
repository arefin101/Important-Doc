<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Product;

class DataController extends Controller
{
    public function index(){
        return view('index');
    }

    public function load(){

        $products = Product::select(['productId','productName','quantity']);
        return DataTables::of($products)
                ->addColumn('action', '<button class="btn btn-danger">Yes</button>')
                ->make(true);
    }

    public function load2(){

        $products = Product::select(['productId','productName', 'quantity']);
        return DataTables::of($products)
                ->addColumn('action', '<a class="btn btn-success">YES</a> <a class="btn btn-success">YES</a>')
                ->addColumn('action', function ($products) {
                    $html = '<a href="#" class="btn btn-success">Edit</a> ';
                    $html .= '<button data-rowid="'.$products->productId.'" class="btn btn-danger">Del</button>';
                    return $html;
                })
                ->addColumn('action', function ($products) {
                    return '           
               
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li class="divider"></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    
                    
                    ';
                })
                ->make(true);
    }

}
