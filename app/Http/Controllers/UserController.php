<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers(){

        $cesaeInfo = $this->getCesaeInfo();
        $allUsers = $this->getUsers();

        return view('users.all_users', compact('cesaeInfo', 'allUsers'));
    }

    protected function getCesaeInfo(){
        $cesaeInfo = [
            'name'=>'cesae',
            'address' =>'rua do cesae'
        ];

        return     $cesaeInfo;
    }

    protected function getUsers(){
        $users = [
            [1, 'Ana', '912222333'],
            [2, 'Luís', '912222333'],
            [3, 'Miguel', '912222333'],
            [4, 'Jéssica', '912222333'],
            [5, 'Filipe', '912222333'],
        ];



        return  $users;
    }
}
