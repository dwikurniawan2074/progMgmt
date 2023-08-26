<?php


namespace Tests\Support\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * @throws \ReflectionException
     */
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Administrator',
            'isAdmin?'=> 1,
        ];


        $user = $this->db->table('users');
        $user->insert($data);

    }
}
