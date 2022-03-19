<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\GroupModel;

class Materi extends BaseController
{

    protected $MateriModel;

    public function __construct()
    {
        $this->materiModel = new MateriModel();
        $this->groupModel = new GroupModel();
    }
    public function index()
    {

        $data = [
            'title' => 'MATERI',
            'materi' => $this->materiModel->findAll()
        ];
        return view('/materi/_view', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'UPLOAD',
            'group' => $this->groupModel->findAll()
        ];
        return view('materi/_upload', $data);
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
            'nama_materi' => [
                'rules' => 'uploaded[nama_materi]|mime_in[nama_materi,application/pdf,application/msword]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa pdf,doc',
                    // 'max_size' => 'Ukuran File Maksimal 500 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // $materiModel = new MateriModel();
        $dataMateri = $this->request->getFile('nama_materi');
        $fileName = $dataMateri->getName('nama_materi');
        // dd($fileName);
        $group_materi = $this->request->getPost('group_materi');
        // dd($group_materi);

        $this->materiModel->save([
            'nama_materi' => $fileName,
            'group_materi' => $group_materi

        ]);
        $dataMateri->move('upload', $fileName);
        session()->setFlashdata('success', 'materi Berhasil diupload');
        return redirect()->to(base_url('/materi'));
    }
    function download($id)
    {
        // load download helder
        $this->load->helper('download');

        $filename = $this->MateriModel->find($id);
        // read file contents
        $data = file_get_contents(base_url('upload/' . $filename));
        // dd($data);
        force_download($filename, $data);
    }
    function preview()
    {
        $data = [
            'title' => 'BACA',
            'materi' => $this->materiModel->findAll()
        ];
        return view('/materi/_preview', $data);
    }
    public function delete($id)
    {
        $namaFile = $this->materiModel->find($id);
        unlink('upload/' . $namaFile->nama_materi);

        $this->materiModel->delete($id);
        session()->setFlashdata('success', 'data berhasil di hapus');
        return redirect()->to('/materi');
    }
}


        // $group = $this->request->getPost('group_materi');

        // if ($dataMateri = $this->request->getFiles('nama_materi')) {
        //     foreach ($dataMateri['nama_materi'] as $img) {
        //         if ($img->isValid() && !$img->hasMoved()) {
        //             $newName = $img->getRandomName();
        //             $img->move(WRITEPATH . 'upload', $newName);
        //         }
        //     }
        // }