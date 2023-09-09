<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model {

    protected $table = "admin";
    protected $primaryKey = "admin_id";
    protected $allowedFields = [
        "level",
        "admin_name",
        "admin_password",
        "is_deleted",
        "created_date",
        "modified_date",
    ];

}

?>