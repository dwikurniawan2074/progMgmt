<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        //
    }

    public function showForm()
    {
        echo view('user/tambahTask');
    }

    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        $task = new TaskModel();
        $data = $this->request->getPost();
        $img = $this->request->getFile('foto');
        if ($img->getError() == 4) {
           $path = null;
        } else {
        $path = $img->store('img',);

        }
        $data['foto'] = $path;
        $rules = $task->getValidationRules();
        if (!$this->validate($rules, $task->getValidationMessages())) {
            echo view('user/tambahTask', [
                'validation' => $this->validator,
            ]);
        } else {
            $task->insert($data);
            return redirect()->to('/user/index')->with('success', 'Task has been created.');
        }
    }

    public function edit($id)
    {
        $data['tasks'] = (new TaskModel())->find($id);
        echo view('user/editTask', $data);
    }
    public function update($id)
    {
        helper('form');
        $task = new TaskModel();
        $data = $this->request->getPost();
        $img = $this->request->getFile('foto');
        if ($img->getError() == 4) {
           $path = null;
        } else {
        $path = $img->store('img',);

        }
        $data['foto'] = $path;
        $rules = $task->getValidationRules();
        if (!$this->validate($rules, $task->getValidationMessages())) {
            echo view('user/editTask', [
                'validation' => $this->validator,
            ]);
        } else {
            $task->update($id, $data);
            return redirect()->to('/user/index')->with('success', 'Task has been updated.');
        }
    }

    public function delete($id)
    {
        $task = new TaskModel();
        $task->delete($id);
        return redirect()->to('/user/index')->with('success', 'Task has been deleted.');
    }
}
