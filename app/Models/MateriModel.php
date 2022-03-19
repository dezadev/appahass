<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'materi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $allowedFields    = ['id', 'nama_materi', 'group_materi'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // public function getGroup()
    // {
    //     return $this->db->table('materi')
    //         ->join('materi', 'nm_group.IDnm_group=materi.IDnm_group')
    //         //  ->join('jurusan', 'jurusan.IDJurusan=siswa.IDJurusan')
    //         ->get()->getResultArray();
    // }
}
