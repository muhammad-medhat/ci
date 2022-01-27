<?php

namespace App\Controllers\Admin;
// use App\Models\ContactModel;
use App\Controllers\BaseController;

use \App\Controllers\ContactsController;

class Groupscontroller extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->contacts_model = new \App\Models\ContactModel();
        // $this->perpage=10;
    }

    public function index()
    {
        echo'ggggggggggggggggggggggg';
        $c= new ContactsController();
        var_dump($c);
        // $this->data['contacts'] =  $this->contacts_model->findAll();
        // return view('contacts/index', $this->data);
    }

    public function insert(){
        var_dump($_POST);
        return view('contacts/insert', $this->data);
    }

}
