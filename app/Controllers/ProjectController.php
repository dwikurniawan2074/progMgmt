<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use Faker\Core\DateTime;

class ProjectController extends BaseController
{
    public function index()
    {

    }

    public function showForm()
    {
        helper('form');
        echo view('Admin/projectForm');
    }
    /**
     * @throws \ReflectionException
     */
    public function create()
    {
        helper('form');
        $projects = new ProjectModel();
        $data = $this->request->getPost();
        $rules = $projects->getValidationRules();
        if (!$this->validate($rules, $projects->getValidationMessages()))
        {
            echo view('Admin/Form', [
                'validation' => $this->validator,
            ]);
            return response()->json($this->validator->getErrors(), 422);
        }else{
            $projects->insert($data);
            return redirect()->to('/')->with('success', 'Project has been created.');
        }
    }

    public function edit($id)
    {
        $data['projects'] = (new ProjectModel())->find($id);
        echo view('Admin/editProject', $data);
    }

    /**
     * @throws \ReflectionException
     * @throws \Exception
     */
    public function update($id)
    {
        helper('form');
        $projects = new ProjectModel();
        $data = $this->request->getPost();
        $rules = $projects->getValidationRules();
        $data['tanggal_buat'] = now();
        if (!$this->validate($rules, $projects->getValidationMessages()))
        {
            echo view('Admin/editProject', [
                'validation' => $this->validator,
            ]);
        }else{
            $projects->update($id, $data);
            return redirect()->to('/')->with('success', 'Project has been updated.');
        }
    }

    public function delete($id)
    {
        $projects = new ProjectModel();
        $projects->delete($id);
        return redirect()->to('/')->with('success', 'Project has been deleted.');
    }
}
