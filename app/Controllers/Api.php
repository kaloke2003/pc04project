<?php

namespace App\Controllers;

use App\Models\User_model;
use App\Models\Product_model;
use App\Models\Cart_model;

class Api extends BaseController
{
    public function addCart(){

        try {

            $token = $_POST['token'];
            $product_id = $_POST['product_id'];
            $qty = $_POST['qty'];
            
            $user_model = new User_model();

            $userdata = $user_model->where([ 
                'token' => $token,
                'is_deleted' => 0,
            ])->first();

            if(empty($userdata)) {
                throw new \Exception("invalid token");
            }

            $product_model = new Product_model();

            $productData = $product_model->where([
                'product_id' => $product_id,
                'is_deleted' => 0,
            ])->first();
            if(empty($productData)) {
                throw new \Exception("invalid product id");
            }

            $cart_model = new Cart_model();
            $cart_model->insert([
                'user_id' => $userdata['user_id'],
                'product_id' => $product_id,
                'qty' => $qty,
                'unitprice' => $productData['price'],
                'created_date' => date("Y-m-d H:i:s")
            ]);

            echo "OK";

        } catch (\Exception $e){

            echo "ERROR : ".$e->getMessage();

        }


    }


    public function getCart($token){

        try {

            $user_model = new User_model();
            $userdata = $user_model->where([
                'token' => $token,
                'is_deleted' => 0,
            ])->first();

            if(empty($userdata)) {
                throw new \Exception("invalid token");
            }

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


            //PHP ARRAY => JSON ARRAY
            echo json_encode($cartList);

        } catch (\Exception $e){

            echo "ERROR : ".$e->getMessage();

        }

    }

}
