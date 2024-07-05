<?php

namespace App\Controllers;

use App\Models\SubmissionModel;
use CodeIgniter\Controller;

class SubmissionController extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $model = new SubmissionModel();
        $data['submissions'] = $model->where('user_id', session()->get('id'))->findAll();
        return view('submissions/index', $data);
    }

    public function create()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('submissions/create');
    }

    public function store()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $model = new SubmissionModel();
        $data = [
            'user_id' => session()->get('id'),
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'status' => 'pending'
        ];
        $model->save($data);
        return redirect()->to('/submissions');
    }
}
