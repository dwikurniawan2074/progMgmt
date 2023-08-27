<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\TaskModel;
use CodeIgniter\HTTP\RedirectResponse;

class TaskController extends BaseController
{
    public function index()
    {
        //
    }

    public function showForm()
    {
        helper('form');
        $data['projects'] = (new ProjectModel())->findAll();
        echo view('user/tambahTask', $data);
    }

    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        helper('form');
        $task = new TaskModel();
        $data = $this->request->getPost();
        $data['progress'] = 0;
        $img = $this->request->getFile('foto');
        if ($img == null) {
           $path = null;
        } else {
        $path = $img->store('img',);

        }
        $data['foto'] = $path;
        $rules = $task->getValidationRules();
        if (!$this->validate($rules, $task->getValidationMessages())) {
            echo view('user/tambahTask', [
                'validation' => $this->validator,
                'projects' => (new ProjectModel())->findAll(),
            ]);
        } else {
            $task->insert($data);
            return redirect()->to('/user/index')->with('success', 'Task has been created.');
        }
    }

    /**
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        helper('form');
        $data['task'] = (new TaskModel())->find($id);
        echo view('user/editTask', $data);
    }

    /**
     * @param $id
     * @return RedirectResponse|void
     * @throws \ReflectionException
     */
    public function update($id)
    {
        helper('form');
        $task = new TaskModel();
        $data = $this->request->getPost();
        $img = $this->request->getFile('foto');
        if ($img->isValid() && !$img->hasMoved()) {
            $path = $img->store('img');
            $data['foto'] = $path;
        } else {
            unset($data['foto']);
        }
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

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id)
    {
        $task = new TaskModel();
        $task->delete($id);
        return redirect()->to('/user/index')->with('success', 'Task has been deleted.');
    }
}
