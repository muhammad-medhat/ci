<?php

namespace App\Controllers\Admin;

use App\Models\ContactModel;
use App\Controllers\BaseController;

class Contactscontroller extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->contacts_model = new \App\Models\ContactModel();
        // $this->perpage=10;
    }

    public function index()
    {
        echo"<h2>Admin Contacts</h2>";
        $this->data['contacts'] =  $this->contacts_model->findAll();
        return view('contacts/index', $this->data);
    }
    public function test(){
        echo"test contact";
    }

    public function insert(){
        var_dump($_POST);
        return view('contacts/insert', $this->data);
    }

}
