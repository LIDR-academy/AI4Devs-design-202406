<?php namespace App\Controllers;

use App\Models\JobPostModel;
use App\Models\UserModel;
use App\Models\ApplicationModel;

class JobPostController extends BaseController
{
    public function index()
    {
        $model = new JobPostModel();
        $data['job_posts'] = $model->findAll();
        return view('job_posts/index', $data);
    }

    public function show($id)
    {
        $model = new JobPostModel();
        $data['job_post'] = $model->find($id);
        return view('job_posts/show', $data);
    }

    public function apply($id)
    {
        $model = new JobPostModel();
        $data['job_post'] = $model->find($id);
        return view('job_posts/apply', $data);
    }

    public function save($id)
    {
        $userModel = new UserModel();

        $userData = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'experience' => $this->request->getPost('experience'),
        ];

        if ($userModel->save($userData)) {
            $userId = $userModel->insertID();
            $applicationModel = new ApplicationModel();
            $applicationData = [
                'user_id' => $userId,
                'job_post_id' => $id,
            ];
            $applicationModel->save($applicationData);

            session()->setFlashdata('success', 'Te has registrado y aplicado correctamente.');
            
            return redirect()->to('/');

        } else {
            
            session()->setFlashdata('errors', $userModel->errors());

            return redirect()->back()->withInput();
        }
    }
}