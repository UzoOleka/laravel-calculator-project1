<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getData(Request $req){
        $a= $req->a;
        $b= $req->b;
        $c= $req->c;

        if($c=='add'){
            $result=$a+$b;
        }

        if($c=='minus'){
            $result=$a-$b;
        }

        return view('display',compact('result'));
    }
}
