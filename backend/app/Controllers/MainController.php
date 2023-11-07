<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
use App\Models\UserModel;

class MainController extends ResourceController
{
   
    use ResponseTrait;

    public function index()
    {
        //
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
            'artist' => $json->artist,
            'title' => $json->title,
            'release_date' => $json->release_date,
            'genre' => $json->genre,

        ];
        $main = new MainModel();
        $r =$main->save($data);
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
        $existingUser = $userModel->where('email', $email)->first();

        if ($existingUser) {
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
    
}
