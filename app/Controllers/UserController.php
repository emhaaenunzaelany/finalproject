<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('admin/users/index', $data);
    }

    public function create()
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        return view('admin/users/create');
    }

    public function store()
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getVar('role')
        ];
        $model->save($data);
        return redirect()->to('/admin/users');
    }

    public function edit($id)
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('admin/users/edit', $data);
    }

    public function update($id)
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'role' => $this->request->getVar('role')
        ];
        if ($this->request->getVar('password')) {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        }
        $model->update($id, $data);
        return redirect()->to('/admin/users');
    }

    public function delete($id)
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/admin/users');
    }
}
