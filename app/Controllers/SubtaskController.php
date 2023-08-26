<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SubtaskModel;
use CodeIgniter\HTTP\RedirectResponse;

class SubtaskController extends BaseController
{
    public function index()
    {
        //
    }

    public function showForm()
    {
        echo view('user/tambahSubtask');
    }

    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        $subtask = new SubtaskModel();
        $data = $this->request->getPost();
        $rules = $subtask->getValidationRules();
        $img = $this->request->getFile('foto');
        if ($img->getError() == 4) {
            $path = null;
        } else {
            $path = $img->store('img',);

        }
        $data['foto'] = $path;
        if (!$this->validate($rules, $subtask->getValidationMessages())) {
            echo view('user/tambahSubtask', [
                'validation' => $this->validator,
            ]);
        } else {
            $subtask->insert($data);
            return redirect()->to('/user/index')->with('success', 'Subtask has been created.');
        }
    }

    /**
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        $data['task']= (new SubtaskModel())->findAll();
        $data['subtasks'] = (new SubtaskModel())->find($id);
        echo view('user/editSubtask', $data);
    }

    /**
     * @throws \ReflectionException
     */
    public function update($id)
    {
        helper('form');
        $subtask = new SubtaskModel();
        $data = $this->request->getPost();
        $img = $this->request->getFile('foto');
        if ($img->getError() == 4) {
           $path = null;
        } else {
        $path = $img->store('img',);

        }
        $data['foto'] = $path;
        $rules = $subtask->getValidationRules();
        if (!$this->validate($rules, $subtask->getValidationMessages())) {
            echo view('user/editSubtask', [
                'validation' => $this->validator,
            ]);
        } else {
            $subtask->update($id, $data);
            return redirect()->to('/user/index')->with('success', 'Subtask has been updated.');
        }
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id)
    {
        $subtask = new SubtaskModel();
        $subtask->delete($id);
        return redirect()->to('/user/index')->with('success', 'Subtask has been deleted.');
    }
}
