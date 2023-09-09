<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Frontend extends BaseController
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

        if(empty($token)) {
            $this->data['is_login'] = false;
        } else {
            $this->data['is_login'] = true;
            $this->data['name'] = $name;
            $this->data['token'] = $token;
        }


    }

    public function home()
    {
        return view('header', $this->data).view('home', $this->data).view('footer', $this->data);
    }
    public function blog()
    {
        return view('header', $this->data).view('blog', $this->data).view('footer', $this->data);
    }
    public function about()
    {
        return view('header', $this->data).view('about', $this->data).view('footer', $this->data);
    }
    public function contact()
    {
        return view('header', $this->data).view('contact', $this->data).view('footer', $this->data);
    }
    public function checkout()
    {
        return view('header', $this->data).view('checkout', $this->data).view('footer', $this->data);
    }
    public function wishlist()
    {
        return view('header', $this->data).view('wishlist', $this->data).view('footer', $this->data);
    }
    public function account()
    {
        return view('header', $this->data).view('account', $this->data).view('footer', $this->data);
    }
    

}
