<?php

namespace App\Controllers\Admin;

use App\Models\ContactModel;
use App\Controllers\BaseController;

class Blogcontroller extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->contacts_model = new \App\Models\ContactModel();
    }

    public function index()
    {
        echo"<h2>Admin Blog</h2>";
        $this->data['contacts'] =  $this->contacts_model->findAll();
        // return view('contacts/index', $this->data);
    }


    public function insert(){
        $this->data['contacts'] =  $this->contacts_model->findAll();

        return view('blog/insert', $this->data);
    }
    public function insert_action(){
        print"<pre>";
        var_dump($_POST);
        // return view('contacts/insert', $this->data);
    }

}
