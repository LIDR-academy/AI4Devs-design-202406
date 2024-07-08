<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JobPostModel;
use App\Models\ApplicationModel;
use App\Models\UserModel;

class JobPostController extends BaseController
{
    public function index()
    {
        $model = new JobPostModel();
        $data['job_posts'] = $model->findAll();
        $data['success'] = session()->getFlashdata('success');
        return view('admin/job_posts/index', $data);
    }

    public function create()
    {
        $data['errors'] = session()->getFlashdata('errors');
        return view('admin/job_posts/create', $data);
    }

    public function store()
    {
        $model = new JobPostModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'requirements' => $this->request->getPost('requirements'),
            'salary_range' => $this->request->getPost('salary_range'),
            'work_schedule' => $this->request->getPost('work_schedule'),
            'location' => $this->request->getPost('location'),
            'company' => $this->request->getPost('company'),
            'created_by' => session()->get('user_id'),
        ];

        if ($model->save($data)) {
            session()->setFlashdata('success', 'El puesto se ha creado correctamente.');
            return redirect()->to('/admin/job_posts');
        } else {
            session()->setFlashdata('errors', $model->errors());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $model = new JobPostModel();
        $data['job_post'] = $model->find($id);
        $data['errors'] = session()->getFlashdata('errors');
        return view('admin/job_posts/edit', $data);
    }

    public function update($id)
    {
        $model = new JobPostModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'requirements' => $this->request->getPost('requirements'),
            'salary_range' => $this->request->getPost('salary_range'),
            'work_schedule' => $this->request->getPost('work_schedule'),
            'location' => $this->request->getPost('location'),
            'company' => $this->request->getPost('company'),
        ];

        if ($model->update($id, $data)) {
            session()->setFlashdata('success', 'El puesto se ha actualizado correctamente.');
            return redirect()->to('/admin/job_posts');
        } else {
            session()->setFlashdata('errors', $model->errors());
            return redirect()->back()->withInput();
        }
    }

    public function applications($id)
    {
        $jobPostModel = new JobPostModel();
        $applicationModel = new ApplicationModel();
        $userModel = new UserModel();

        $data['job_post'] = $jobPostModel->find($id);
        $applications = $applicationModel->where('job_post_id', $id)->findAll();

        $data['applications'] = [];
        foreach ($applications as $application) {
            $user = $userModel->find($application['user_id']);
            $data['applications'][] = [
                'id' => $application['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'experience' => $user['experience'],
                'created_at' => $application['created_at'],
                'phase' => $application['phase'],
            ];
        }

        return view('admin/job_posts/applications', $data);
    }

    public function update_phase($id)
    {
        $applicationModel = new ApplicationModel();
        $applicationModel->update($id, ['phase' => $this->request->getPost('phase')]);
        return redirect()->back();
    }

    public function allApplications()
    {
        $applicationModel = new ApplicationModel();
        $userModel = new UserModel();
        $jobPostModel = new JobPostModel();

        $applications = $applicationModel->findAll();
        $data['applications'] = [];

        foreach ($applications as $application) {
            $user = $userModel->find($application['user_id']);
            $jobPost = $jobPostModel->find($application['job_post_id']);
            $data['applications'][] = [
                'id' => $application['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'experience' => $user['experience'],
                'job_title' => $jobPost['title'],
                'created_at' => $application['created_at'],
                'phase' => $application['phase'],
            ];
        }

        return view('admin/applications/index', $data);
    }
}