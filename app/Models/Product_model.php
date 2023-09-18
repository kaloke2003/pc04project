<?php

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model {

    protected $table = "product";
    protected $primaryKey = "product_id";
    protected $allowedFields = [
        "img",
        "title",
        "price",
        "detail",
        "created_date",
        "modified_date",
        "is_deleted",
    ];

}

?>