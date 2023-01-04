<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'Product';
    protected $primaryKey       = 'product_id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $allowedFields    = ['product_id','product_name','product_type', 'product_category', 'product_price', 'product_stock', 'product_description', 'product_material', 'product_finishing', 'product_shape', 'product_size', 'product_size', 'product_packaging'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'input_date';
    protected $updatedField  = 'update_time';
}
