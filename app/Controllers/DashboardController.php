<?php

namespace App\Controllers;

use App\Models\SubmissionModel;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // $model = new SubmissionModel();
        // $data = [];

        // if (session()->get('role') == 'admin') {
        //     $data['submissions'] = $model->findAll();
        // } else {
        //     $data['submissions'] = $model->where('user_id', session()->get('id'))->findAll();
        // }

        // return view('dashboard', $data);
        return view('dashboard');
    }
}
