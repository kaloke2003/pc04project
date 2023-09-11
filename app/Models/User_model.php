<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model {

    protected $table = "user";
    protected $primaryKey = "user_id";
    protected $allowedFields = [
        "level",
        "name",
        "email",
        "password",
        "token",
        "created_date",
        "modified_date",
        "is_deleted",
    ];

}

?>