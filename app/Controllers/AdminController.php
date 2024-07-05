<?php

namespace App\Controllers;

use App\Models\SubmissionModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new SubmissionModel();
        $data['submissions'] = $model->findAll();
        return view('admin/index', $data);
    }

    public function approve($id)
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new SubmissionModel();
        $model->update($id, ['status' => 'approved']);
        return redirect()->to('/admin');
    }

    public function reject($id)
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new SubmissionModel();
        $model->update($id, ['status' => 'rejected']);
        return redirect()->to('/admin');
    }

    public function submissions()
    {
        if (!session()->get('logged_in') || session()->get('role') != 'admin') {
            return redirect()->to('/login');
        }

        $model = new SubmissionModel();
        $data['submissions'] = $model->findAll();
        return view('admin/submissions', $data);
    }
}
