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
use App\Models\Admin_model;



class Backend extends BaseController
{
    private $data = [];
    
    //token in

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

        if(empty($token) && $level != 1) {
            $this->data['is_login'] = false;
            echo "<h1>This is not where you should come</h1>";
            echo '<a href="'.base_url('login').'">Please Log in with admin account</a>';
            exit;
        
        } else {
            $this->data['is_login'] = true;
            $this->data['name'] = $name;
            $this->data['token'] = $token;
            $this->data['level'] = $level;
        }


    }

    public function index()
    {
        return view('admin/header', $this->data).view('admin/dashboard', $this->data).view('admin/footer', $this->data);
    }

    //product manage
    public function product_manage(){

        $product_model = new Product_model();
        $productList = $product_model->where(['is_deleted'=>0])->findAll();
        $this->data['productList'] = $productList;

        return view('admin/header', $this->data).view('admin/product_list', $this->data).view('admin/footer', $this->data);

    }

    //can be used for add and edit
    public function product_add($id=""){

        if($id == "") {
            $this->data['mode'] = "Add";
        } else {
            $this->data['mode'] = "Edit";

            $product_model = new Product_model();
            $productData = $product_model->find($id);
            $this->data['productData'] = $productData;

        }
        $this->data['id'] = $id;

        

        return view('admin/header', $this->data).view('admin/product_add', $this->data).view('admin/footer', $this->data);

    }

    public function product_del($id) {
        //delete
        $product_model = new Product_model();
        $product_model->update($id, [
            'is_deleted' => 1,
            'modified_date' => date("Y-m-d H:i:s")
        ]);
        return redirect()->to("/product_manage");

    }

    //insert, update
    public function product_submit(){

        $mode = $_POST['mode'];
        $id = $_POST['id'];
        $title = $_POST['title'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];


        $product_model = new Product_model();

        if($mode == "Add") {

            $product_model->insert([
                'title' => $title,
                'img' => $img,
                'price' => $price,
                'detail' => $detail,
                'created_date' => date("Y-m-d H:i:s")
            ]);

        } else {

            $product_model->update($id, [
                'title' => $title,
                'img' => $img,
                'price' => $price,
                'detail' => $detail,
                'modified_date' => date("Y-m-d H:i:s")
            ]);

        }
        return redirect()->to("/product_manage");

    }


    //user manage
    public function user_manage(){

        $user_model = new User_model();
        $userList = $user_model->where(['is_deleted'=>0])->findAll();
        $this->data['userList'] = $userList;

        return view('admin/header', $this->data).view('admin/user_list', $this->data).view('admin/footer', $this->data);

    }

    
    //can be used for add and edit
    public function user_add($id=""){

        if($id == "") {
            $this->data['mode'] = "Add";
        } else {
            $this->data['mode'] = "Edit";

            $user_model = new User_model();
            $userData = $user_model->find($id);
            $this->data['userData'] = $userData;

        }
        $this->data['id'] = $id;

        

        return view('admin/header', $this->data).view('admin/user_add', $this->data).view('admin/footer', $this->data);

    }
    
    //insert, update
    public function user_submit(){

        $mode = $_POST['mode'];
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        // print_r($_POST);
        // exit;


        $user_model = new User_model();

        if($mode == "Add") {

            $user_model->insert([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'created_date' => date("Y-m-d H:i:s")
            ]);

        } else {

            if(empty($password)) {

                $user_model->update($id, [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'level' => $level,
                    'modified_date' => date("Y-m-d H:i:s")
                ]);

            } else {

                $user_model->update($id, [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'level' => $level,
                    'modified_date' => date("Y-m-d H:i:s")
                ]);

            }

        
        }
        return redirect()->to("/user_manage");

    }

    
    public function user_del($id) {
        //delete
        $user_model = new User_model();
        $user_model->update($id, [
            'is_deleted' => 1,
            'modified_date' => date("Y-m-d H:i:s")
        ]);
        return redirect()->to("/user_manage");

    }
  

}
