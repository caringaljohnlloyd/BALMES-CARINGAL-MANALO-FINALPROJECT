<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
use App\Models\UserModel;

class MainController extends ResourceController
{
    public function index()
    {
        //
    }
    /*public function update($id)
    {
        // Your update logic here
        $request = $this->request->getJSON(); // Assuming you are sending JSON data from Vue
        // Perform the update based on the $id and $request data

        return $this->response->setJSON(['message' => 'Record updated successfully']);
    }*/
    public function login()
    {
        $request = service('request');
        $response = service('response');
        $userModel = new UserModel();

        $username = $request->getVar('username');
        $password = $request->getVar('password');

        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $data = [
                'username' => $user['username'],
                'password' => 'password',
            ];
            return $response->setJSON($data);
        } else {
            return $response->setJSON(['error' => 'Authentication failed'])->setStatusCode(401);
        }
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
        $main = new MainModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
}
