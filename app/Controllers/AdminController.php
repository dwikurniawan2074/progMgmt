<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    // View
    public function index()
    {
        return view('admin/index');
    }


    public function dataAkun()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->where('isAdmin?', 0)->findAll(); // Mengambil data pengguna dengan isAdmin = 0

        return view('admin/dataAkun', $data);
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

    public function editAkun($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);

        return view('admin/editAkun', $data);
    }
    //End View Controller

    // Post Controller 
    public function saveAkun()
    {
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            $rules = [
                'username' => 'required|min_length[3]|max_length[50]',
                'password' => 'required|min_length[8]',
                'nama_lengkap' => 'required|max_length[100]|alpha', // Tambahkan alpha di sini
                'isAdmin' => 'required|in_list[0,1]'
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }

            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'isAdmin?' => $this->request->getVar('isAdmin')
            ];

            if ($userModel->insert($data)) {
                return redirect()->to('/admin/dataAkun')->with('success', 'Akun berhasil ditambahkan.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal menambahkan akun.');
            }
        }

        return view('admin/tambahAkun');
    }

    public function updateAkun($id)
    {
        $userModel = new UserModel();

        // Validasi data
        $validationRules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'nama_lengkap' => 'required|max_length[100]|alpha',
            'isAdmin' => 'required|in_list[0,1]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'isAdmin?' => $this->request->getPost('isAdmin')
        ];

        // Lakukan update jika validasi berhasil
        $userModel->update($id, $data);

        // Redirect ke halaman dataAkun atau tempat lainnya
        return redirect()->to(base_url('admin/dataAkun'))->with('success', 'Akun berhasil diperbarui.');
    }

    // Menghapus user
    public function deleteAkun($id)
    {
        $userModel = new UserModel();

        // Lakukan penghapusan akun
        $userModel->delete($id);

        // Redirect kembali ke halaman dataAkun atau tempat lainnya
        return redirect()->to(base_url('admin/dataAkun'))->with('success', 'Akun berhasil dihapus.');
    }
}
