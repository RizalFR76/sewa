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
}
