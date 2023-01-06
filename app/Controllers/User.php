<?php

namespace App\Controllers;

use App\Models\PesanModel;
use App\Models\PengaturanModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->pesanModel = new PesanModel;
        $this->pengaturanModel = new PengaturanModel;
    }
    public function index()
    {
        if (!session()->get('id')) {
            return redirect()->to(base_url() . "/beranda");
        }
        $pengaturan = $this->pengaturanModel->where("id", 1)->first();
        $data = [
            "pengaturan" => $pengaturan
        ];
        
        return view('user');
    }
    public function tambah()
    {
        $data = [
            "nama" => $this->request->getPost("nama"),
            "tanggal" => $this->request->getPost("tanggal"),
            "jam" => $this->request->getPost("jam"),
            "lapangan" => $this->request->getPost("lapangan"),
            "bayar" => $this->request->getPost("bayar"),
            "selesai" => 0
        ];

        $cekJam = $this->pesanModel->where(["tanggal" => $this->request->getPost("tanggal"), "jam" => $this->request->getPost("jam"), "lapangan" => $this->request->getPost("lapangan")])->first();
        if ($cekJam) {
            echo json_encode("Lapangan dengan jam dan tanggal tersebut sudah di pesan.");
        } else {
            $this->pesanModel->save($data);
            echo json_encode("");
        }
    }

   
}