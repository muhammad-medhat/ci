<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function test( $p1='laptop')
    {
        return view('shop', ['product'=>$p1]);
    }
    
    public function cl_test( $p1='laptop')
    {
        print "client shop $p1";
    }


}
