<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start(); // Memulai sesi
    }
    
    public function index()
    {
        return view("login");
    }

    public function loginAction()
    {
        $userModel = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Sanitasi input
        $username = trim($username);
        $password = trim($password);

        // Validasi input
        if (empty($username) || empty($password)) {
            return redirect()->to('/login')->with('error', 'Harap isi semua kolom.');
        }

        // Ambil data pengguna
        $user = $userModel->where('username', $username)
            ->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login sukses, simpan informasi sesi
            $this->session->set('user_id', $user['id_user']);
            $this->session->set('role', $user['isAdmin?']);

            if ($user['isAdmin?'] == 1) {
                return redirect()->to('/admin/index'); // Ganti dengan halaman index admin
            } else {
                return redirect()->to('/user/index'); // Ganti dengan halaman dashboard user
            }
        } else {
            // Login gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->to('/login')->with('error', 'Username atau password salah.');
        }
    }
}
