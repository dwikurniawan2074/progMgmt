<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'projects';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_project',
        'nama',
        'deskripsi',
        'anggota_tim',
        'tanggal_buat',
        'tanggal_deadline',
        'progress',
        'id_user',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama'            => 'required|string',
        'deskripsi'       => 'required|string',
        'anggota_tim'     => 'required|string',
        'tanggal_deadline'=> 'required|valid_date',
        'progress'        => 'required|integer',
    ];
    protected $validationMessages   = [
        'nama'            => [
            'required' => 'Nama harus diisi',
            'string'   => 'Nama harus berupa string',
        ],
        'deskripsi'       => [
            'required' => 'Deskripsi harus diisi',
            'string'   => 'Deskripsi harus berupa string',
        ],
        'anggota_tim'     => [
            'required' => 'Anggota tim harus diisi',
            'string'   => 'Anggota tim harus berupa string',
        ],
        'tanggal_deadline'=> [
            'required' => 'Tanggal deadline harus diisi',
            'valid_date' => 'Tanggal deadline harus berupa tanggal yang valid',
        ],
        'progress'        => [
            'required' => 'Progress harus diisi',
            'integer'  => 'Progress harus berupa integer',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

}
