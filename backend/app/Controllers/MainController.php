<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModel;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use App\Models\FeedbackModel;
use App\Models\BookingModel;
use App\Models\ShopModel;
use App\Models\PoolModel;
use App\Models\CartModel;
use App\Models\ManifestModel;
use App\Models\InvoiceModel;
use App\Models\ReceiptModel;
use App\Models\OrderListModel;
use App\Models\OrdersModel;




class MainController extends ResourceController
{

    use ResponseTrait;
    protected $room;
    protected $orders;
    protected $orderitems;
    protected $invoice;

    public function index()
    {
        //
    }
    public function getInvoice()
    {
        $invoice = new InvoiceModel();
        $data = $invoice->findAll();
        return $this->respond($data, 200);
    }
    public function getManifest()
    {
        $manifest = new ManifestModel();
        $data = $manifest->findAll();
        return $this->respond($data, 200);
    }
    public function getCart($id)
    {
        $cart = new CartModel();
        $data = $cart->where('id',$id)->findAll();
        return $this->respond($data, 200);
    }
    public function getPool()
    {
        $pool = new PoolModel();
        $data = $pool->findAll();
        return $this->respond($data, 200);
    }
    public function getShop()
    {
        $shop = new ShopModel();
        $data = $shop->findAll();
        return $this->respond($data, 200);
    }
    public function getFeedback()
    {
        $f = new FeedbackModel();
        $data = $f->findAll();
        return $this->respond($data, 200);
    }
    public function getRoom()
    {
        $room = new RoomModel();
        $data = $room->findAll();
        return $this->respond($data, 200);
    }
    public function del()
    {
        $json = $this->request->getJSON();
        $cart_id = $json->cart_id;
        $cart = new CartModel();
        $r = $cart->delete($cart_id);
        return $this->respond($r, 200);
    }
    public function getData()
    {
        $main = new UserModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    public function getbook()
    {
        $book = new BookingModel();
        $data = $book->findAll();
        return $this->respond($data, 200);
    }
    
    public function getDataShop()
    {
        $main = new ShopModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    public function save()
    {
        $json = $this->request->getJSON();
        $data = [
            'feedback' => $json->feedback,
            'id' => $json->id,

        ];

        $feedback = new FeedbackModel();
        $result = $feedback->save($data);

        return $this->respond(['message' => 'Feedback submitted successfully', $result], 200);
    }
    public function manifest()
    {
        $json = $this->request->getJSON();
        $data = [
            'manifest' => $json->manifest,
            'id' => $json->id,
        ];

        $manifest = new ManifestModel();
        $result = $manifest->save($data);

        return $this->respond(['message' => 'Manifest submitted successfully', $result], 200);
    }

    public function booking()
    {
        $json = $this->request->getJSON();
        $room_id = $json->room_id;
        $this->room = new RoomModel();
        $booked = $this->room->where(['room_id' => $room_id])->first();
        
        $data = [
            'id' => $json->id,
            'checkin' => $json->checkin,
            'checkout' => $json->checkout,
            'adult' => $json->adult,
            'child' => $json->child,
            'specialRequest' => $json->specialRequest,
            'room_id' => $json->room_id,
        ];
    
        $booking = new BookingModel();
        $r = $booking->save($data);
    
        if ($r) {
            $bookedr = $this->room->update($booked['room_id'], ['room_status' => 'booked']); 
            if ($bookedr) {
                return $this->respond(['message' => 'Booked successfully', 'booking' => $r, 'room' => $booked], 200);
            }
        } else {
            return $this->respond(['message' => 'Booking failed'], 500);
        }
    }
    

    public function register()
    {
        $json = $this->request->getJSON();
        $email = $json->email;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->respond(["error" => "Invalid email format"], 400);
        }
        $userModel = new UserModel();
        $token = $this->verification(50);
        $exUser = $userModel->where('email', $email)->first();

        if ($exUser) {
            return $this->respond(["error" => "Email already exists"], 400);
        } else {
            $password = $json->password;

            if (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[^A-Za-z0-9]/', $password)) {
                return $this->respond(["error" => "Password must contain at least one letter, one number, and one special character"], 400);
            }

            $data = [
                'name' => $json->name,
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
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz_-/*$#@.,<>=%!()?{}[]';
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

            if ($data) {
                $pass = $data['password'];
                $auth = password_verify($password, $pass);
                if ($auth) {
                    return $this->respond(['message' => 'Login successful', 'token' => $data['token'], 'id' => $data['id']], 200);
                } else {
                    return $this->respond(['message' => 'Invalid email or password'], 401);
                }
            } else {
                return $this->respond(['message' => 'Invalid JSON data'], 400);
            }
        }

    }
    public function submitRating()
    {
        $json = $this->request->getJSON();
        $shop_id = $json->shop_id;
        $rating = $json->rating;

        $shopModel = new ShopModel();

        $shopData = $shopModel->find($shop_id);

        if (!$shopData) {
            return $this->respond(['error' => 'Shop not found'], 404);
        }

        $newRatingsCount = $shopData['ratings_count'] + 1;
        $newTotalRatings = $shopData['total_ratings'] + $rating;

        $newRating = $newTotalRatings / $newRatingsCount;

        $updateResult = $shopModel->update($shop_id, [
            'rating' => $newRating,
            'ratings_count' => $newRatingsCount,
            'total_ratings' => $newTotalRatings,
        ]);

        if ($updateResult) {
            return $this->respond(['success' => true, 'newRating' => $newRating]);
        } else {
            return $this->respond(['error' => 'Failed to update rating'], 500);
        }
    }

    public function logout()
    {
        session()->destroy();

        return $this->response->setStatusCode(200)->setJSON(['message' => 'Logout successful']);
    }
    public function Cart()
{
    $cart = new CartModel();
    $json = $this->request->getJSON();

    $shop_id = $json->shop_id;
    $user = $json->id;
    $quantity = $json->quantity; 
    $shopModel = new ShopModel();
    $product = $shopModel->find($shop_id);

    if (!$product) {
        return $this->respond(['message' => 'Product not found'], 404);
    }

    if ($product['prod_quantity'] < $quantity) {
        return $this->respond(['message' => 'Insufficient stock quantity'], 400);
    }

    $existing = $cart->where(['id' => $user, 'shop_id' => $shop_id])->first();

    if ($existing) {
        $existing['quantity'] += $quantity;
        $updateResult = $cart->update($existing['cart_id'], $existing);

        if ($updateResult) {
            // $newQuantity = $product['prod_quantity'] - $quantity;
            // $shopModel->update($shop_id, ['prod_quantity' => $newQuantity]);

            return $this->respond(['message' => 'Item quantity updated in the cart'], 200);
        } else {
            return $this->respond(['message' => 'Failed to update item quantity in the cart'], 500);
        }
    } else {
        $data = [
            'id' => $user,
            'shop_id' => $shop_id,
            'quantity' => $quantity,
        ];

        $addcart = $cart->save($data);

        if ($addcart) {
            // $newQuantity = $product['prod_quantity'] - $quantity;
            // $shopModel->update($shop_id, ['prod_quantity' => $newQuantity]);

            return $this->respond(['message' => 'Item added to cart successfully'], 200);
        } else {
            return $this->respond(['message' => 'Failed to add item to cart'], 500);
        }
    }
}
    public function updateCartQuantity()
    {
      $json = $this->request->getJSON();
    
      $cart_id = $json->cart_id;
      $quantity = $json->quantity;
    
      $cart = new CartModel();
      $existing = $cart->find($cart_id);
    
      if ($existing) {
        $existing['quantity'] = $quantity;
        $updateResult = $cart->update($cart_id, $existing);
    
        if ($updateResult) {
          return $this->respond(['message' => 'Quantity updated successfully'], 200);
        } else {
          return $this->respond(['message' => 'Failed to update quantity'], 500);
        }
      } else {
        return $this->respond(['message' => 'Cart item not found'], 404);
      }
    }

























    public function checkout()
    {
        $this->invoice = new InvoiceModel();
        $this->orderitems = new OrderListModel();
        $this->orders = new OrderSModel();
        $json = $this->request->getJSON();
        $id = $json->id;
    
        $order = [
            'id' => $id,
            'status' => $json->status,
            'total_price' => $json->total_price,
        ];
    
        $this->orders->save($order);
    
        $order_id = $this->orders->insertID();
    
        foreach ($json->items as $item) {
            $orderitem = [
                'id' => $id,
                'shop_id' => $item->shop_id,
                'quantity' => $item->quantity,
                'total_price' => $item->total_price,
                'order_id' => $order_id,
            ];
    
            $this->orderitems->save($orderitem);
    
            $shopModel = new ShopModel();
            $product = $shopModel->find($item->shop_id);
    
            if ($product) {
                $newQuantity = $product['prod_quantity'] - $item->quantity;
                $shopModel->update($item->shop_id, ['prod_quantity' => $newQuantity]);
            }
        }
    
        $inv = [
            'id' => $id,
            'order_id' => $order_id,
        ];
    
        $this->invoice->save($inv);
    
        if ($this->orders->affectedRows() > 0 && $this->orderitems->affectedRows() > 0 && $this->invoice->affectedRows() > 0) {
            return $this->respond(['message' => 'Checkout successful'], 200);
        } else {
            // Handle checkout failure
            return $this->respond(['message' => 'Checkout failed'], 500);
        }
    }
    













































    public function saveShop() {
        $request = $this->request->getJSON();

        $data = [
            'prod_name' => $request->prod_name,
            'prod_quantity' => $request->prod_quantity,
            'prod_desc' => $request->prod_desc,
            'prod_price' => $request->prod_price,
        ];

        $shopModel = new ShopModel();

        try {
            $shopModel->insert($data);
            return $this->respond(["message" => "Data saved successfully"], 200);
        } catch (\Exception $e) {
            return $this->respond(["message" => "Failed to save data: " . $e->getMessage()], 500);
        }
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

    public function  search($query){
        $roomModel = new RoomModel();
        
        $filteredData = $roomModel->searchInRoom($query);
        
        
        return json_encode($filteredData);
    }

 
}

    