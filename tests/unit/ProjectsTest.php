<?php


use App\Models\ProjectModel;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\Database\Seeds\UserSeeder;

final class ProjectsTest extends \CodeIgniter\Test\CIUnitTestCase
{
    use  FeatureTestTrait, DatabaseTestTrait;

    protected $refresh = true;
    protected $seed = UserSeeder::class;

    public function testCreateProject()
    {

        $result = $this->call('post', '/project/post', [
            'nama' => 'Test Project',
            'deskripsi' => 'This is a test project',
            'anggota_tim' => '["1","2"]',
            'tanggal_deadline' => '2023-08-21 12:30:15',
            'progress' => '1',
            'id_user' => '1',
        ]);
    }
}
