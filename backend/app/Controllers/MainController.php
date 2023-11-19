<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MainModel;
use App\Models\UserModel;
use App\Models\FeedbackModel;
use App\Models\DataModel;
use App\Models\BookingModel;
use App\Models\ShopModel;



class MainController extends ResourceController
{
   
    use ResponseTrait;

    public function index()
    {
        //
    }
    public function getShop(){
        $shop = new ShopModel();
        $data = $shop->findAll();
        return $this->respond($data, 200);
    }
    public function getFeedback(){
        $f = new FeedbackModel();
        $data = $f->findAll();
        return $this->respond($data, 200);
    }
    public function getRoom(){
        $room = new RoomModel();
        $data = $room->findAll();
        return $this->respond($data, 200);
    }
    public function del(){
        $json = $this->request->getJSON();
        $id= $json->id;
        $main = new MainModel();
        $r = $main->delete($id);
        return $this->respond($r, 200);

    }
    public function getData(){
        $main = new UserModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function getbook(){
        $book = new BookingModel();
        $data = $book->findAll();
        return $this->respond($data, 200);
    }




public function save() {
    $json = $this->request->getJSON();
    $data = [
        'feedback' => $json->feedback,
        'name' => $json->name,
        'profession' => $json->profession,
    ];

    $feedback = new FeedbackModel();
    $result = $feedback->save($data);

    return $this->respond(['message' => 'Feedback submitted successfully', $result], 200);
}

    public function booking(){
        $json = $this->request->getJSON();
        $data = [
            'name' => $json->name,
            'email' => $json->email,
            'checkin' => $json->checkin,
            'checkout' => $json->checkout,
            'adult' => $json->adult,
            'child' => $json->child,
            'specialRequest' => $json->specialRequest,
        ];
        $booking = new BookingModel();
        $r =$booking->save($data);
        return $this->respond(['message' => 'Booked successfully', $r], 200);
    }
   
    public function register()
    {
        $json = $this->request->getJSON();
        $email = $json->email;
    
        $userModel = new UserModel();
        $token = $this->verification(50); 
        $exUser = $userModel->where('email', $email)->first();
    
        if ($exUser) {
            return $this->respond(["error" => "Email already exists"], 400);
        } else {
            $password = $json->password;
    
            if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
                return $this->respond(["error" => "Password must contain at least one letter and one number"], 400);
            }
    
            $data = [
                'firstname' => $json->firstname,
                'lastname' => $json->lastname,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_BCRYPT),
                'token' => $token, 
                'status' => 'active',        
                'role' => 'user', 
            ];
    
            $u = $userModel->save($data); 
            if ($u) { 
                return $this->respond(['msg' => 'Registered Successfully', 'token' => $token]);  
            } else { 
                return $this->respond(['msg' => 'Error occurred']); 
            }
        }
    }
    
    public function verification($length)
    { 
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
        return substr(str_shuffle($str_result), 0, $length); 
    }
    
    public function login()
    {
        $json = $this->request->getJSON();

        if (isset($json->email) && isset($json->password)) {
            $email = $json->email;
            $password = $json->password;

        $userModel = new UserModel();
           $data = $user = $userModel->where('email', $email)->first();

            if($data)
            {
                $pass = $data['password'];
                $auth = password_verify($password, $pass);
                if($auth){
                    return $this->respond(['message' => 'Login successful','token' => $data['token']], 200);
                }
            
             else {
                return $this->respond(['message' => 'Invalid email or password'], 401);
            }
        } else {
            return $this->respond(['message' => 'Invalid JSON data'], 400);
        }
    }
    
}
public function logout()
{
    session()->destroy();

    return $this->response->setStatusCode(200)->setJSON(['message' => 'Logout successful']);
}
public function resetPassword()
    {
        $email = $this->request->getJSON()->email;

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return $this->respond(['message' => 'Invalid email'], 404);
        }

        $newPassword = bin2hex(random_bytes(8));

        $userModel->set('password', password_hash($newPassword, PASSWORD_DEFAULT));
        $userModel->where('email', $email);
        $userModel->update();


        return $this->respond(['message' => 'Password reset successful', 'newPassword' => $newPassword]);
    }

    public function updatePassword()
    {
        $jsonData = $this->request->getJSON(true);
        $email = $jsonData['email'];
        $newPassword = $jsonData['newPassword'];
    
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();
    
        if (!$user) {
            return $this->respond(['message' => 'Invalid email'], 404);
        }
    
        $userModel->set('password', password_hash($newPassword, PASSWORD_DEFAULT));
        $userModel->where('email', $email);
        $userModel->update();
    
        return $this->respond(['message' => 'Password updated successfully']);
    }
    
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
    
