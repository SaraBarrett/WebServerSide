<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homePage(){
        $sum = $this->sum(1,3);

        return view('home.index');
    }

    public function helloWorld(){
        $sum = $this->sum(1,3);
        return view('hello');
    }


    protected function sum($num1, $num2){
        return $num1+$num2;
    }
}
