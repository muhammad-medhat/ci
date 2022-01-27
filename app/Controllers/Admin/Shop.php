<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\Shop as clientShop;


class Shop extends BaseController
{
    public function index()
    {
        return view('shop', ['admin'=>'admin']);
    }

    public function test( $p1='laptop')
    {
        $cl = new clientShop();
        $cl->cl_test();
        return view('shop', ['product'=>"Admin $p1"]);
    }


}
