<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }


    public function dataAkun()
    {
        return view('admin/dataAkun');
    }


    public function taskProject()
    {
        return view('admin/taskProject');
    }

    public function subtaskProject()
    {
        return view('admin/subtaskProject');
    }

    public function tambahAkun()
    {
        return view('admin/tambahAkun');
    }

    public function editAkun()
    {
        return view('admin/editAkun');
    }

}
