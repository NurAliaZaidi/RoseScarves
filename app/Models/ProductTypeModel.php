<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductTypeModel extends Model
{

    protected $table            = 'Product_Type';
    protected $primaryKey       = 'type_id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $allowedFields    = ['type_category', 'type_name'];
   
}