<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Materi extends BaseController
{

    protected $MateriModel;

    public function __construct()
    {
        $this->materiModel = new MateriModel();
    }
    public function index()
    {
        $materi = new MateriModel();
        $data = [
            'title' => 'materi',
            'materi' => $materi->findAll()
        ];
        return view('/upload/_view', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'UPLOAD',
        ];
        return view('upload/_upload', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'group' => [
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

        $materi = new MateriModel();
        $dataMateri = $this->request->getFile('nama_materi');
        $fileName = $dataMateri->getRandomName('nama_materi');
        $materi->insert([
            'nama_materi' => $fileName,
            'group' => $this->request->getPost('group')
        ]);
        $dataMateri->move('upload', $fileName);
        session()->setFlashdata('success', 'materi Berhasil diupload');
        return redirect()->to(base_url('/materi/index'));
    }
    // function download($id)
    // {
    //     $materi = new MateriModel();
    //     $data = $materi->find($id);
    //     return $this->response->download($data->nama_materi, null);
    // }
    // function file()
    // {
    //     $this->load->helper('download');
    //     $name = $this->uri->segment(3);
    //     $data = file_get_contents("upload/" . $name);
    //     force_download($name, $data);
    // }
    function download()
    {
        // load download helder
        $this->load->helper('download');
        // $this->MateriModel->nama_materi;
        $filename = $this->MateriModel->nama_materi;
        // read file contents
        $data = file_get_contents(base_url('/upload' . $filename));
        force_download($filename, $data);
    }
    function preview()
    {
        // $this->MateriModel->findAll()->where->group;
    }
    public function delete($id)
    {

        $this->materiModel->delete($id);
        session()->setFlashdata('success', 'data berhasil di hapus');
        return redirect()->to('/materi');
    }
}
