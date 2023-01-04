<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function viewHome()
    {
        return view('customer/home');
    }
}
