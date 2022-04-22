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

    public function viewpdf($id)
    {
        return $this->db->table("materi")
            ->where('id', $id)
            // ->where('nama_materi',)
            ->get()
            ->getResult();
    }
}
