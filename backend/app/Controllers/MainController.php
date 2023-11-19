<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
use App\Models\UserModel;
use App\Models\FeedbackModel;
use App\Models\DataModel;

class MainController extends ResourceController
{
   
    use ResponseTrait;

    public function index()
    {
        //
    }
    public function getFeedback(){
        $f = new FeedbackModel();
        $data = $f->findAll();
        return $this->respond($data, 200);
    }

    public function del(){
        $json = $this->request->getJSON();
        $id= $json->id;
        $main = new MainModel();
        $r = $main->delete($id);
        return $this->respond($r, 200);

    }

   public function save(){
        $json = $this->request->getJSON();
        $data = [
            'feedback' => $json->feedback,
            'name' => $json->name,
            'profession' => $json->profession,
        ];
        $feedback = new FeedbackModel();
        $r =$feedback->save($data);
        return $this->respond($r, 200);
    }
    public function getData(){
        $main = new UserModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function register()
    {
        $json = $this->request->getJSON();
        $email = $json->email;

        $userModel = new UserModel();
        $exUser = $userModel->where('email', $email)->first();

        if ($exUser) {
            return $this->respond(["error" => "Email already exists"], 400);
        } else {
            $data = [
                'firstname' => $json->firstname,
                'lastname' => $json->lastname,
                'email' => $email,
                'password' => password_hash($json->password, PASSWORD_BCRYPT),
            ];

            $main = new UserModel();
            $r = $main->save($data);

            return $this->respond($r, 200);
        }
    }
    public function login()
    {
        $json = $this->request->getJSON();

        if (isset($json->email) && isset($json->password)) {
            $email = $json->email;
            $password = $json->password;

            $userModel = new UserModel();
            $user = $userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                return $this->respond(['message' => 'Login successful'], 200);
            } else {
                return $this->respond(['message' => 'Invalid email or password'], 401);
            }
        } else {
            return $this->respond(['message' => 'Invalid JSON data'], 400);
        }
    }
    // public function getFeedback(){
    //     $feedback = new FeedbackModel();
    //     $data = $feedback->findAll();
    //     return $this->respond($data, 200);
    // }
    
    public function fetchData()
    {
        $dataModel = new DataModel();
        $data = $dataModel->first(); // Fetching the first row from the database
        return $this->respond($data);

    }
    public function getImageData() {
        $model = new DataModel(); // Create an instance of your DataModel

        // Fetch image data from the database
        $imageData = $model->findAll(); // Or use appropriate logic to fetch specific image data based on your requirements

        // Return the fetched image data as JSON response
        return $this->response->setJSON($imageData);
    }
    
}
    
