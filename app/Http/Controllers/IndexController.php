<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homePage(){
        $sum = $this->sum(1,3);
        $helloVar = $this->helloFunc();

        return view('home.index', compact('sum', 'helloVar'));
    }

    public function helloWorld(){
        $sum = $this->sum(1,3);
        $helloVar = $this->helloFunc();

        return view('hello');
    }


    protected function sum($num1, $num2){
        return $num1+$num2;
    }

    protected function helloFunc(){
        $hello = 'Olá mundo, estamos a aprender web';
        return $hello;
    }
}
