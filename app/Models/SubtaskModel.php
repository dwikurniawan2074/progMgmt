<?php

namespace App\Models;

use CodeIgniter\Model;

class SubtaskModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'subtasks';
    protected $primaryKey       = 'id_subtask';
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
        'id_task'
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
