<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang;

class BarangController extends BaseController
{
    public $barang;
    public function __construct()
    {
        $this->barang= new Barang();
    } 
    public function index()
    {
        $data = $this->barang->findAll();
        return view('barang/index',compact('data'));
    }
    public function tambah()
    {
        return view('barang/tambah_barang.php');
    }

    public function tambah_barang()
    {
        $this->barang->insert([
                    'nama' => $this->request->getPost('nama'),
                    'stock' => $this->request->getPost('stock'),
                    'jenis' => $this->request->getPost('jenis'),
                    'merk' => $this->request->getPost('merk'),
                ]);
        return redirect('barang')->with('success', 'Data Added Successfully');
    }
    public function edit($id)
    {
        $data = $this->barang->find($id);
        // dd($data);
        return view('barang/edit_barang.php',compact('data'));
    }
    public function update($id)
    {
        $this->barang->update($id,[
            'nama' => $this->request->getPost('nama'),
            'stock' => $this->request->getPost('stock'),
            'jenis' => $this->request->getPost('jenis'),
            'merk' => $this->request->getPost('merk'),
        ]);
        return redirect('barang')->with('success', 'Data Update Successfully');
    }
    public function hapus($id){

        $this->barang->delete($id);

        return redirect('barang')->with('success', 'Data deleted Successfully');
    }
}
