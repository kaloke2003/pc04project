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

class Login extends BaseController
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

    public function login()
    {
        return view('header', $this->data).view('login', $this->data).view('footer', $this->data);
    }

    public function login_submit(){
        //login submit code here...
        $email = $_POST['email'];
        $password = $_POST['password'];

        $User_model = new User_model();
        $userdata = $User_model->where([
            'email'      => $email,
            'password'        => $password,
            'is_deleted' => 0,
        ])->first();
        if(empty($userdata)) {
            return redirect()->to("/login?err=Invalid email or password");
        }

        $token = md5(date("YmdHis").rand(1000,9999));
        helper("cookie");
        set_cookie("token", $token, time()+7*24*3600);

        $session = \Config\Services::session();
        $session->set([
            'name' => $userdata['name'],
            'token' => $token,
            'level' => $userdata['level'],
        ]);

        $User_model->update([
            'user_id' => $userdata['user_id']
        ],[
            'token' =>  $token,
            'modified_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to("/login_thanks")->withCookies();

    }

    public function login_thanks(){

        return view('header', $this->data).view('login_thanks', $this->data).view('footer', $this->data);

    }

    public function register_submit(){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $copassword = $_POST['copassword'];

        if(empty($email)) {
            return redirect()->to("/login?err=Email Cannot Be Empty");
        } 
        if(empty($password)) {
            return redirect()->to("/login?err=Password Cannot Be Empty");
        } 
        if($password!=$copassword) {
            return redirect()->to("/login?err=Password Must same with Confirm Password");
        } 

        $User_model = new User_model();
        $userdata = $User_model->where([
            'email'      => $email,
            'is_deleted' => 0,
        ])->first();
        if(!empty($userdata)) {
            return redirect()->to("/login?err=Email is already exists");
        }

        $User_model->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'copassword' => $copassword,
            'created_date' => date("Y-m-d H:i:s")
        ]);

        return redirect()->to("/register_thanks");

    }
    public function register_thanks(){

        return view('header', $this->data).view('register_thanks', $this->data).view('footer', $this->data);

    }

    public function logout(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to("/home");
    }
}
