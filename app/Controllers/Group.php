<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GroupModel;

class Group extends BaseController
{
    protected $groupModel;

    public function __construct()
    {
        $this->groupModel = new GroupModel();
    }
    public function index()
    {
        $data = [
            'title' => 'GROUP',
            'group' => $this->groupModel->findAll()
        ];
        return view('/group/_vgroup', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'TAMBAH GROUP'
        ];
        return view('/group/_cgroup', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'group_materi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->groupModel->save([
            'group_materi' => $this->request->getVar('group_materi')
        ]);

        session()->setFlashdata('success', 'group Berhasil ditambahkan');
        return redirect()->to(base_url('/group'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'EDIT',
            'group' => $this->groupModel->getModel($id)
        ];
        return view('/group/_egroup', $data);
    }
    public function update($id)
    {
        $this->groupModel->save([
            'id' => $id,
            'group_materi' => $this->request->getVar('group_materi'),

        ]);

        session()->setFlashdata('success', 'group Berhasil diubah');
        return redirect()->to(base_url('/group'));
    }
    public function delete($id)
    {
        $this->groupModel->delete($id);
        session()->setFlashdata('success', 'data berhasil di hapus');
        return redirect()->to('/group');
    }
}
