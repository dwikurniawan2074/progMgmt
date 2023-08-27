<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use CodeIgniter\HTTP\RedirectResponse;
use Faker\Core\DateTime;

class ProjectController extends BaseController
{
    public function index()
    {

    }

    public function showForm()
    {
        helper('form');
        echo view('user/tambahProject');
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
        }else{
            $projects->insert($data);
            return redirect()->to('/user/index')->with('success', 'Project has been created.');
        }
    }

    /**
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        $data['projects'] = (new ProjectModel())->find($id);
        echo view('user/editProject', $data);
    }

    /**
     * @param $id
     * @return RedirectResponse|void
     * @throws \ReflectionException
     */
    public function update($id)
    {
        helper('form');
        $projects = new ProjectModel();
        $data = $this->request->getPost();
        $rules = $projects->getValidationRules();
        if (!$this->validate($rules, $projects->getValidationMessages()))
        {
            echo view('Admin/editProject', [
                'validation' => $this->validator,
            ]);
        }else{
            $projects->update($id, $data);
            return redirect()->to('/user/index')->with('success', 'Project has been updated.');
        }
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id)
    {
        helper('form');
        $projects = new ProjectModel();
        $projects->delete($id);
        return redirect()->to('/user/index')->with('success', 'Project has been deleted.');
    }
}
