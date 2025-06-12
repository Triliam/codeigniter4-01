<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view("home");
    }

    public function products(){
        return view("products");
    }

    public function where_are_we(){
        return view("where_are_we");
    }
}
