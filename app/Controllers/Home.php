<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "sistem informasi produk pembelian dan penjualan";
        echo view("welcome_message", $data);
    }
}
