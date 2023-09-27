<?php

namespace App\Controllers;

class User extends BaseController


{


  public function index(): string
    {
        $user_model = new \App\Models\UserModel();
        //dd($user_model -> findAll());
        $data['user'] =$user_model -> findAll();
        return view('user/index', $data);
    }

    


    public function test(): string
    {

        return('test test');
    }


    public function add()
    {

        return('add');
    }

    public function view()
    {

        return('view');
    }

    public function edit()
    {

        return('edit');
    }

    public function delete()
    {

        return('delete');
    }


}
