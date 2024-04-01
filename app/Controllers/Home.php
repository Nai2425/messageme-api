<?php

namespace App\Controllers;

use App\Models\Home as HomeModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function register()
    {
        date_default_timezone_set('Asia/Manila');
        $currentDate = date("Y-m-d H:i:s");
        $requestData = $this->request->getJSON();

        $HomeModel = model(HomeModel::class);
        $data = [
            'email' => $requestData->email,
            'firstname' => $requestData->fname,
            'lastname' => $requestData->lname,
            'middlename' => $requestData->mname,
            'password' => $requestData->pass,
            'gender' => $requestData->gen,
            'image_path' => '',
            'created_at' => $currentDate
        ];
        $HomeModel->insert($data);
        if ($HomeModel->affectedRows() > 0) {
            return $this->response->setJSON(['message' => 'Data inserted successfully']);
        } else {
            return $this->response->setJSON(['message' => 'Failed to insert data']);
        }
    }
}
