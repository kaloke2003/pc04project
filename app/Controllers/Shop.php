<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\User_model;
use App\Models\Product_model;
use App\Models\Cart_model;


class Shop extends BaseController
{

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        // E.g.: $this->session = \Config\Services::session();
        $session = \Config\Services::session();
        $token = $session->get("token");
        $name = $session->get("name");
        $level = $session->get("level");

        if(empty($token)) {
            $this->data['is_login'] = false;
        } else {
            $this->data['is_login'] = true;
            $this->data['name'] = $name;
            $this->data['token'] = $token;
            $this->data['level'] = $level;
        }


    }

    public function shop()
    {
        
        $product_model = new Product_model();
        $productList = $product_model->where(['is_deleted'=>0])->findAll();
        $this->data['productList'] = $productList;

        return view('header', $this->data).view('shop', $this->data).view('footer', $this->data);
    }

    public function cart(){

        //Get userdata by token session
        $user_model = new User_model();
        $userdata = $user_model->where([
                'token' => $this->data['token'],
                'is_deleted' => 0,
        ])->first();

        if(empty($userdata)) {
            throw new \Exception("invalid token");
        }

        //get cart data by user_id
        $cart_model = new Cart_model();
        $cartList = $cart_model->where([
            'user_id' => $userdata['user_id'],
            'is_deleted' => 0,
        ])->findAll();

        $product_model = new Product_model();

        foreach($cartList as $k=>$v) {

            $productData = $product_model->where([
                    'product_id' => $v['product_id']
            ])->first();

            $cartList[$k]['title'] = $productData['title'];
            $cartList[$k]['img'] = $productData['img'];

        }

        $this->data['cartList'] = $cartList;

        // print_r($this->data['cartList']);
        // exit;

        return view('header', $this->data).view('cart', $this->data).view('footer');
    }
}
