<?php

namespace App\Controllers;

use App\Models\Product_model;

class Shop extends BaseController
{
    public function shop()
    {
        
        $product_model = new Product_model();
        $productList = $product_model->where(['is_deleted'=>0])->findAll();
        $this->data['productList'] = $productList;

        return view('header', $this->data).view('shop', $this->data).view('footer', $this->data);
    }
}
