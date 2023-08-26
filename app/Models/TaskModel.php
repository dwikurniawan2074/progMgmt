<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'deskripsi',
        'tanggal_input',
        'foto',
        'progress',
        'id_project'
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
        'tanggal_input'=> 'required|valid_date',
        'progress'        => 'required|integer',
    ];
    protected $validationMessages   = [
        'nama' => [
            'required' => 'Nama harus diisi.'
        ],
        'deskripsi' => [
            'required' => 'Deskripsi harus diisi.'
        ],
        'tanggal_input' => [
            'required' => 'Tanggal input harus diisi.'
        ],
        'progress' => [
            'required' => 'Progress harus diisi.'
        ]
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
