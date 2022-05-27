<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\GroupModel;

class Materi extends BaseController
{

    protected $MateriModel;
    protected $groupMode;

    public function __construct()
    {
        $this->materiModel = new MateriModel();
        $this->groupModel = new GroupModel();
    }
    public function index()
    {

        $data = [
            'title' => 'MATERI',
            'materi' => $this->materiModel->paginate(10, 'halaman'),
            'pager' => $this->materiModel->pager,
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
                'rules' => 'uploaded[nama_materi]|mime_in[nama_materi,application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,video/mp4,video/x-msvideo]',
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

        $dataMateri = $this->request->getFileMultiple('nama_materi');
        foreach ($dataMateri as $img) {
            if ($img->isValid() && !$img->hasMoved()) {
                $fileName = $img->getName('nama_materi');
                $group_materi = $this->request->getPost('group_materi');
                $this->materiModel->save([
                    'nama_materi' => $fileName,
                    'group_materi' => $group_materi
                ]);

                $img->move('upload/', $fileName);
            }
        }

        session()->setFlashdata('success', 'materi Berhasil diupload');
        return redirect()->to(base_url('/materi'));
    }
    function download($id)
    {

        $data = $this->materiModel->find($id);
        return $this->response->download('upload/' . $data->nama_materi, null);
    }
    function preview($id)
    {

        $data = [
            'title' => 'BACA',
            // 'materi' => $this->materiModel->find($id),
            'materi' => $this->materiModel->viewpdf($id),

        ];
        // dd($data);
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
