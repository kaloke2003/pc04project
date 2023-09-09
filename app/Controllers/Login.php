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
    public function login()
    {
        return view('header').view('login').view('footer');
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

        return redirect()->to("/login_thanks")->withCookies();

    }

    public function login_thanks(){

        return view('header').view('login_thanks').view('footer');

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

        return view('header').view('register_thanks').view('footer');

    }

    public function logout(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to("/home");
    }
}
