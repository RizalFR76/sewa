<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang;
use App\Models\Sewa;
use App\Models\User;
use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Entity\Cast\TimestampCast;
use Kint\Parser\TimestampPlugin;

class SewaController extends BaseController
{
    public $sewa;
    public $user;
    public $barang;
    public function __construct()
    {
        $this->sewa= new Sewa();
        $this->user=new User();
        $this->barang=new Barang() ;
    } 
    public function index()
    {
        $data = $this->sewa->findAll();
        return view('sewa/index',compact('data'));
    }
    public function tambah()
    {
        $pelanggan = $this->user->findAll();
        $barang = $this->barang->findAll();
        return view('sewa/tambah_sewa.php',compact('pelanggan','barang'));
    }

    public function tambah_sewa()
    {
        date_default_timezone_set("Asia/Makassar");
        $this->sewa->insert([
                    'id_penyewa' => $this->request->getPost('id_penyewa'),
                    'id_barang' => $this->request->getPost('id_barang'),
                    'tgl_sewa' => date('Y-m-d H:i:s'),
                    'tgl_ambil' => $this->request->getPost('tgl_ambil'),
                    'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
                    'k_sewa' => $this->request->getPost('k_sewa'),
                    'k_pengembalian' => $this->request->getPost('k_pengembalian')
                ]);
        return redirect('sewa')->with('success', 'Data Added Successfully');
    }
    public function edit($id)
    {
        $data = $this->sewa->find($id);
        $pelanggan = $this->user->findAll();
        $barang = $this->barang->findAll();
        // dd($data);
        return view('sewa/edit_sewa.php',compact('data','pelanggan','barang'));
    }
    public function update($id)
    {
        date_default_timezone_set("Asia/Makassar");
        $this->sewa->update($id,[
            'id_penyewa' => $this->request->getPost('id_penyewa'),
            'id_barang' => $this->request->getPost('id_barang'),
            'tgl_sewa' => date('Y-m-d H:i:s'),
            'tgl_ambil' => $this->request->getPost('tgl_ambil'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'k_sewa' => $this->request->getPost('k_sewa'),
            'k_pengembalian' => $this->request->getPost('k_pengembalian')
        ]);
        return redirect('sewa')->with('success', 'Data Update Successfully');
    }
    public function hapus($id){

        $this->sewa->delete($id);

        return redirect('sewa')->with('success', 'Data deleted Successfully');
    }
    public function info()
    {
        $db = \config\Database::connect();
        $builder = $db->table('barang');
        $builder ->select('*');
        $builder ->join('sewa','barang.id=sewa.id_barang');
        $query = $builder->get();
        $data = $query->getResult();
        return view('sewa/info',compact('data'));
    }
    public function info2()
    {
        $db = \config\Database::connect();
        $builder = $db->table('barang');
        $builder ->select('user.nama as nama,user.jk as jk, barang.merk, barang.nama as nama_barang, sewa.tgl_sewa, sewa.tgl_ambil, sewa.tgl_pengembalian, user.telepon');
        $builder ->join('sewa','barang.id=sewa.id_barang');
        $builder ->join('user','user.id=sewa.id_penyewa');
        $query = $builder->get();
        $data = $query->getResult();
        // dd($data);
        return view('sewa/info2',compact('data'));
    }
    public function cek()
    {
        $login= ['username'=>$this->request->getPost('username'),
        'password'=>$this->request->getPost('password')
        ];
        $data = $this->user->findAll();
        dd($data);
    }
}
