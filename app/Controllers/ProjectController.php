<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\TaskModel;
use CodeIgniter\HTTP\RedirectResponse;
use Faker\Core\DateTime;

class ProjectController extends BaseController
{
    public function index()
    {
        $projectModel = new ProjectModel();
        $data['projects'] = $projectModel->where('id_user', session()->get('user_id'))->findAll();
//        $data['user'] = session()->get('user_id');

        return view('user/index', $data);
    }

    public function detail($id)
    {
        $projectModel = new ProjectModel();
        $data['projects'] = $projectModel->find($id);
        $data['tasks'] = (new TaskModel())->where('id_project', $id)->findAll();

        return view('user/taskProject', $data);
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
        $data['progress'] = 0;
        $data['id_user'] = session()->get('user_id');
        $rules = $projects->getValidationRules();
        if (!$this->validate($rules, $projects->getValidationMessages()))
        {
            echo view('user/tambahProject', [
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
