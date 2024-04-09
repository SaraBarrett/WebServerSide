<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers(){

        $cesaeInfo = $this->getCesaeInfo();
        $allUsers = $this->getUsers();
        //dd( $allUsers);
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
            ['id'=> 1, 'name'=> 'Ana', 'phone'=> '912222333'],
            ['id'=>2, 'name'=> 'Luís', 'phone'=> '912222333'],
            ['id'=>3, 'name'=> 'Miguel', 'phone'=> '912222333'],
            ['id'=>4, 'name'=> 'Jéssica', 'phone'=>'912222333'],
            ['id'=> 5, 'name'=>  'Filipe','phone'=> '912222333'],
        ];



        return  $users;
    }
}
