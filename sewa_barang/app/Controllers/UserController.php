<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public $user;
    public function __construct()
    {
        $this->user= new User();
    } 
    public function index()
    {
        $data = $this->user->findAll();
        return view('user/index',compact('data'));
    }
    public function tambah()
    {
        return view('user/tambah_user.php');
    }

    public function tambah_user()
    {
        
        $this->user->insert([
                    'nama' => $this->request->getPost('nama'),
                    'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                    'jk' => $this->request->getPost('jk'),
                    'alamat' => $this->request->getPost('alamat'),
                    'telepon' => $this->request->getPost('telepon'),
                    'email' => $this->request->getPost('email'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                ]);
                
        return redirect('user')->with('success', 'Data Added Successfully');
    }
    public function edit($id)
    {
        $data = $this->user->find($id);
        // dd($data);
        return view('user/edit_user.php',compact('data'));
    }
    public function update($id)
    {
        $this->user->update($id,[
            'nama' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level'),
        ]);
        return redirect('user')->with('success', 'Data Update Successfully');
    }
    public function hapus($id){

        $this->user->delete($id);

        return redirect('user')->with('success', 'Data deleted Successfully');
    }
    
}
