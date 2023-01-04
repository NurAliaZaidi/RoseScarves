<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{

    public function viewDashboard(){

        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/adminDashboard', $data);
    }

    public function viewAllProduct(){

        $data = [
            'title' => 'All Product',
            'all_product' => $this->ProductModel->findAll() //SELECT * FROM Product
        ];

        return view('admin/allproduct', $data);

    }
    public function addProduct()
    {
        $data = [
            'title' => 'Add New Product',
            'add_product' => $this->ProductTypeModel->findAll() //SELECT * FROM Product
        ];

        return view('admin/addnewproduct', $data);
    }

    public function insertProduct()
    {
        $query = $this->ProductModel->query('SELECT product_id FROM Product');

        // $query = $this->ProductModel->select('product_id')->from('Product')->get();
        $row = $query->getLastRow();

        $idPostFix = (int)substr($row->product_id, 2);
        $newincrement = $idPostFix + 1;
        $length = 4;
        $idstring = 'AR'.substr(str_repeat(0, $length).$newincrement, - $length);

        $productID = $idstring;

        $productName = url_title($this->request->getPost('pName'), '-', TRUE);
        $productType = url_title($this->request->getPost('pType'), '-', TRUE);
        $productCategory = url_title($this->request->getPost('pCategory'), '-', TRUE);
        $productPrice = url_title($this->request->getPost('pPrice'), '-', TRUE);
        $productStock = url_title($this->request->getPost('pStock'), '-', TRUE);
        $productDescription = url_title($this->request->getPost('pDescription'), '-', TRUE);
        $productMaterial = url_title($this->request->getPost('pMaterial'), '-', TRUE);
        $productFinishing = url_title($this->request->getPost('pFinishing'), '-', TRUE);
        $productShape = url_title($this->request->getPost('pShape'), '-', TRUE);
        $productSize = url_title($this->request->getPost('pSize'), '-', TRUE);
        $productPackaging = url_title($this->request->getPost('pPackaging'), '-', TRUE);

        //insert into database
        $productData = [
            'product_id' => esc($productID),
            'product_name' => esc($this->request->getPost('pName')),
            'product_type' => esc($this->request->getPost('pType')),
            'product_category' => esc($this->request->getPost('pCategory')),
            'product_price' => esc($this->request->getPost('pPrice')),
            'product_stock' => esc($this->request->getPost('pStock')),
            'product_description' => esc($this->request->getPost('pDescription')),
            'product_material' => esc($this->request->getPost('pMaterial')),
            'product_finishing' => esc($this->request->getPost('pFinishing')),
            'product_shape' => esc($this->request->getPost('pShape')),
            'product_size' => esc($this->request->getPost('pSize')),
            'product_packaging' => esc($this->request->getPost('pPackaging')),

        ];

        $this->ProductModel->insert($productData);

        return redirect()->to('all-product')->with('success', 'Product successfully added into the system.');
    }

    public function updateProduct($product_id)
    {
        
        $productName = url_title($this->request->getVar('productName'), '-', TRUE);
        $productType = url_title($this->request->getPost('productType'), '-', TRUE);
        $productCategory = url_title($this->request->getPost('productCategory'), '-', TRUE);
        $productPrice = url_title($this->request->getPost('productPrice'), '', TRUE);
        $productStock = url_title($this->request->getPost('productStock'), '-', TRUE);
        $productDescription = url_title($this->request->getPost('productDescription'), '-', TRUE);
        $productMaterial = url_title($this->request->getPost('productMaterial'), '-', TRUE);
        $productFinishing = url_title($this->request->getPost('productFinishing'), '-', TRUE);
        $productShape = url_title($this->request->getVar('productShape'), '', FALSE);
        $productSize = url_title($this->request->getPost('productSize'), '-', TRUE);
        $productPackaging = url_title($this->request->getPost('productPackaging'), '-', TRUE);

        //update data into database
        $productData = [
            
            'product_name' => $this->request->getVar('productName'),
            'product_type' => esc($this->request->getPost('productType')),
            'product_category' => esc($this->request->getPost('productCategory')),
            'product_price' => esc($this->request->getPost('productPrice')),
            'product_stock' => esc($this->request->getPost('productStock')),
            'product_description' => esc($this->request->getPost('productDescription')),
            'product_material' => esc($this->request->getPost('productMaterial')),
            'product_finishing' => esc($this->request->getPost('productFinishing')),
            'product_shape' => esc($this->request->getPost('productShape')),
            'product_size' => esc($this->request->getPost('productSize')),
            'product_packaging' => esc($this->request->getPost('productPackaging')),

        ];
        
        $this->ProductModel->update($product_id, $productData);

        return redirect()->to('all-product')->with('success', 'Product successfully UPDATED from system.');
    }

    //delete product
    public function deleteProduct($product_id)
    {
        $this->ProductModel->where('product_id', $product_id)->delete();

        return redirect()->to('all-product')->with('success', 'Product successfully REMOVE from system.');
    }

}
