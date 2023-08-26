<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view("user/index");
    }

    public function taskProject()
    {
        return view('user/taskProject');
    }

    public function subtaskProject()
    {
        return view('user/subtaskProject');
    }

    
    public function tambahProject()
    {
        return view('user/tambahProject');
    }
    
    public function tambahTask()
    {
        return view('user/tambahTask');
    }

    public function tambahSubtask()
    {
        return view('user/tambahSubtask');
    }
}
